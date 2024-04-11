<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
    ];

    public static function findOrFail($modelClass, $id, $columns = ['id'])
    {
        $model = $modelClass::find($id, $columns);

        if (!$model) {
            throw (new ModelNotFoundException)->setModel($modelClass, $id);
        }

        return $model;
    }

}
