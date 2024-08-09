<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Schema;

class OrderScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        $table = $model->getTable();

        $columns = Schema::getColumnListing($table);

        $builder
            ->when(in_array('order', $columns), function (Builder $query) use ($table) {
                $query->orderBy("$table.order", 'desc');
            })
            ->when(in_array('updated_at', $columns), function (Builder $query) use ($table) {
                $query->orderBy("$table.updated_at", 'desc');
            })
            ->when(in_array('created_at', $columns), function (Builder $query) use ($table) {
                $query->orderBy("$table.created_at", 'desc');
            })
            ->when(in_array('id', $columns), function (Builder $query) use ($table) {
                $query->orderBy("$table.id", 'desc');
            });
    }
}
