<?php

namespace App\Http\Controllers;

use App\Models\Finalproduct;
use App\Http\Requests\StoreFinalproductRequest;
use App\Http\Requests\UpdateFinalproductRequest;
use App\Services\ModelService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FinalproductController extends Controller
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

        $finalproducts = Finalproduct::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->orderByRaw('LOWER(name) ' . ($sortAZ ? 'asc' : 'desc'))
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('Finalproducts/Index',
            [
                'finalproducts' => $finalproducts,
                'columnsList' => $columnsList,
                'filters' => $request->only(['search']),
                'sortAZ' => $sortAZ,
                'flash' => [
                    'success' => $request->session()->get('success'),
                    'error' => $request->session()->get('error'),
                    'warning' => $request->session()->get('warning'),
                    'info' => $request->session()->get('info'),
                ],
            ]
        );
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
    public function store(StoreFinalproductRequest $request)
    {
        // Validate the request data
        $validated = $request->validated();

        // Create a new Finalproduct instance and populate it with validated data
        $finalproduct = new Finalproduct($validated);

        // Save the new Finalproduct instance to the database
        $finalproduct->save();

        // Return a response indicating success
        return redirect()->route('finalproducts.index')->with('success', 'Finalproduct created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Finalproduct $finalproduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Finalproduct $finalproduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFinalproductRequest $request, Finalproduct $finalproduct)
    {
        // Validate the request data
        $validated = $request->validated();

        // Update the Finalproduct instance with validated data
        $finalproduct->update($validated);

        // Return a response indicating success
        return redirect()->route('finalproducts.index')->with('success', 'Finalproduct updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finalproduct $finalproduct)
    {
        $finalproduct->delete();

        return redirect()->route('finalproducts.index')->with('success', 'Product deleted successfully.');
    }

    /**
     * Get the list of fillable columns with additional parameters.
     */
    public function getFillableColumnsWithParams()
    {
        return $this->modelService->getFillableColumnsWithParams(Finalproduct::class);
    }
}
