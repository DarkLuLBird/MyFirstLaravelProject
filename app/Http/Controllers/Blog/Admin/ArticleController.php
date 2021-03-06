<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Models\BlogArticle;
use App\Repositories\BlogArticleRepository;
use App\Repositories\BlogCategoryRepository;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    /**
     * @var BlogArticleRepository
     */
    private $blogArticleRepository;

    /**
     * @var BlogCategoryRepository
     */
    private $blogCategoryRepository;
    
    public function __construct()
    {
        parent::__construct();
     
        $this->blogArticleRepository = app(BlogArticleRepository::class);
        $this->blogCategoryRepository = app(BlogCategoryRepository::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->blogArticleRepository->getAllWithPaginate(25);

        return view('blog.admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd(__METHOD__);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = $this->blogArticleRepository->getEdit($id);
        if(empty($article)){
            abort(404);
        }

        $categoryList = $this->blogCategoryRepository->getForSelect();

        return view('blog.admin.articles.edit', compact('article', 'categoryList'));

        // dd(__METHOD__, $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd(__METHOD__, $request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd(__METHOD__, $id);
    }
}
