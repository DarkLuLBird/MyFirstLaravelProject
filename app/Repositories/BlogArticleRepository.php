<?php

namespace App\Repositories;

use App\Models\BlogArticle as Model;
use App\Repositories\CoreRepository;


class BlogArticleRepository extends CoreRepository
{   
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Get articles list for admin panel.
     */
    public function getAllWithPaginate($pages)
    {
        $columns = [
            'id',
            'title',
            'slug',
            'is_published',
            'published_at',
            'user_id',
            'category_id',
        ];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->orderBy('id', 'DESC')
            ->with([
                'user:id,name',
                'category:id,title'
            ])
            ->paginate($pages);

        return $result;
    }
    
    /**
     * Get model for editing in admin panel.
     */
    public function getEdit($id)
    {
        $result = $this
            ->startConditions()
            ->find($id);

        return $result;
    }
}