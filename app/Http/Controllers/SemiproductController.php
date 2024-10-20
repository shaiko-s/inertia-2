<?php

namespace App\Http\Controllers;

use App\Services\ModelService;
use App\Models\Semiproduct;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SemiproductController extends Controller
{
    protected $modelService;

    public function __construct(ModelService $modelService)
    {
        $this->modelService = $modelService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sortAZ = $request->input('sortAZ');
        if (!isset($sortAZ)) {
            $sortAZ = true;
        } else {
            $sortAZ = filter_var($sortAZ, FILTER_VALIDATE_BOOLEAN);
        }
        $columnsList = $this->getFillableColumnsWithParams();

        $semiproducts = Semiproduct::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->orderByRaw('LOWER(name) ' . ($sortAZ ? 'asc' : 'desc'))
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('Semiproducts/Index', [
            'semiproducts' => $semiproducts,
            'columnsList' => $columnsList,
            'filters' => $request->only(['search']),
            'sortAZ' => $sortAZ,
            'flash' => [
                'success' => $request->session()->get('success'),
                'error' => $request->session()->get('error'),
                'warning' => $request->session()->get('warning'),
                'info' => $request->session()->get('info'),
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'string|max:255',
        ]);

        // Create a new ingredient with the validated data
        Semiproduct::create($validatedData);

        // Redirect to the index route with a success message
        return redirect()->route('semiproducts.index')
            ->with('success', 'Semiproduct created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semiproduct $semiproduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semiproduct $semiproduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Semiproduct $semiproduct)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'string|max:255',
        ]);

        // Update the ingredient with the validated data
        $semiproduct->update($validatedData);

        // Redirect to the index route with a success message
        return redirect()->route('semiproducts.index')
            ->with('success', 'Semiproduct updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semiproduct $semiproduct)
    {
        $semiproduct->delete();

        return redirect()->route('semiproducts.index')
            ->with('success', 'Semiproduct deleted successfully.');
    }
    /**
     * Get the list of fillable columns with additional parameters.
     */
    public function getFillableColumnsWithParams()
    {
        return $this->modelService->getFillableColumnsWithParams(Semiproduct::class);
    }
}
