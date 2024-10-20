<?php
namespace App\Services;

class ModelService
{
    /**
     * Get the list of fillable columns with additional parameters for any model.
     */
    public function getFillableColumnsWithParams($modelClass)
    {
        $fillableColumns = (new $modelClass)->getFillable();

        $columnsList = array_map(function ($column) {
            return [
                'name' => $column,
                'label' => ucfirst(str_replace('_', ' ', $column)),
                'sortable' => $column === 'name',
                'filterable' => true,
            ];
        }, $fillableColumns);

        return $columnsList;
    }
}
