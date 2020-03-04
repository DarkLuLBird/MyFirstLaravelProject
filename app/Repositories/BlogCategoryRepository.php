<?php

namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Illuminate\Database\Eloquent\Collection;

class BlogCategoryRepository extends CoreRepository
{
    public function getEdit($id)
    {
        $result = $this
            ->startConditions()
            ->find($id);
    
        return $result;
    }

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getForSelect()
    {   
        $sql = implode(', ', [
            'id',
            'CONCAT (id, ". ", title) AS select_title',
        ]);

        $result = $this
            ->startConditions()
            ->selectRaw($sql)
            ->toBase()
            ->get();

        return $result;
    }

    public function getAll()
    {
        $columns = ['id', 'title', 'parent_id'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->get();
        
        return $result;
    }
}