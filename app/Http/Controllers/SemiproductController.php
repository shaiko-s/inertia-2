<?php

namespace App\Http\Controllers;

use App\Models\Semiproduct;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SemiproductController extends Controller
{
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
        dd($columnsList);

        $semiproducts = Semiproduct::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->orderByRaw('LOWER(name) ' . ($sortAZ ? 'asc' : 'desc'))
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('Semiproducts/Index', [
            'semiproducts' => $semiproducts,
            'filters' => $request->only(['search']),
            // 'sortAZ' => $sortAZ,
            // 'flash' => [
            //     'success' => $request->session()->get('success'),
            //     'error' => $request->session()->get('error'),
            //     'warning' => $request->session()->get('warning'),
            //     'info' => $request->session()->get('info'),
            // ],
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semiproduct $semiproduct)
    {
        //
    }

    /**
     * Get the list of fillable columns with additional parameters.
     */
    public function getFillableColumnsWithParams()
    {
        $fillableColumns = (new Semiproduct())->getFillable();

        $columnsList = array_map(function ($column) {
            return [
                'name' => $column,
                'label' => ucfirst(str_replace('_', ' ', $column)),
                'sortable' => true,
                'filterable' => true,
            ];
        }, $fillableColumns);

        return $columnsList;
    }
}
