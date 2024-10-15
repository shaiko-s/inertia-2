<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class IngredientController extends Controller
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

        $ingredients = Ingredient::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->orderByRaw('LOWER(name) ' . ($sortAZ ? 'asc' : 'desc'))
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('Ingredients/Index', [
            'ingredients' => $ingredients,
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
    { {
            // Validate the request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
            ]);

            // Create a new ingredient with the validated data
            Ingredient::create($validatedData);

            // Redirect to the index route with a success message
            return redirect()->route('ingredients.index')
                ->with('success', 'Ingredient created successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        // Update the ingredient with the validated data
        $ingredient->update($validatedData);

        // Redirect to the index route with a success message
        return redirect()->route('ingredients.index')
            ->with('success', 'Ingredient updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        // Delete the ingredient
        $ingredient->delete();

        // Redirect to the index route with a success message
        return redirect()->route('ingredients.index')
            ->with('success', 'Ingredient deleted successfully.');
    }

    /**
     * Get the list of fillable columns with additional parameters.
     */
    public function getFillableColumnsWithParams()
    {
        $fillableColumns = (new Ingredient)->getFillable();

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
