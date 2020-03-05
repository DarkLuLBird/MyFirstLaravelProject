<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Repositories\BlogCategoryRepository;
use App\Http\Requests\BlogCategoryUpdateRequest;
use App\Http\Requests\BlogCategoryCreateRequest;
use App\Models\BlogCategory;
use Illuminate\Database\QueryException;
use Illuminate\Support\Str;

class CategoryController extends BaseController
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $blogCategoryRepository;

    public function __construct()
    {
        parent::__construct();
     
        $this->blogCategoryRepository = app(BlogCategoryRepository::class);
    }

    public function index()
    {
        $categories = $this->blogCategoryRepository->getAll();

        return view('blog.admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new BlogCategory;
        $categoriesList = $this->blogCategoryRepository->getForSelect();

        return view('blog.admin.categories.edit', compact('category', 'categoriesList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCategoryCreateRequest $request)
    {
        $data = $request->input();
        if(empty($data['slug'])){
            $data['slug'] = Str::slug($data['title']);
        }

        $category = new BlogCategory($data);
        $category->save();

        if($category){
            return redirect()->route('blog.admin.categories.edit', $category->id)
                ->with(['success' => 'Успешно сохранено']);
        }
        else{
            return back()->withErrors(['message' => 'Ошибка сохранения'])
                ->withInput();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->blogCategoryRepository->getEdit($id);
        if(empty($category)){
            abort(404);
        }
        $categoriesList = $this->blogCategoryRepository->getForSelect();

        return view('blog.admin.categories.edit', compact('category', 'categoriesList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogCategoryUpdateRequest $request, $id)
    {
        // $category = BlogCategory::find($id);
        $category = $this->blogCategoryRepository->getEdit($id);
        if(empty($category)){
            return back()
                ->withErrors(['message' => "Запись id=[$id] не найдена"])
                ->withInput();
        }

        $data = $request->all();
        
        try{
            $result = $category
                ->fill($data)
                ->save();
        }
        catch(QueryException $e){
            return back()
                ->withErrors(['message' => $e->errorInfo[2]])
                ->withInput();
        }

        if($result){
            return redirect()
                ->route('blog.admin.categories.edit', $category->id)
                ->with(['success' => 'Успешно сохранено']);
        }
    }
}
