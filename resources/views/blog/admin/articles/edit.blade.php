@extends('layouts.app')

@section('content')
    @php
        /** @var \App\Models\BlogArticle $article */
    @endphp
    <div class="container">
        @include('blog.admin.articles.includes.result_messages')

        @if($article->exists)
            <form method="POST" action="{{ route('blog.admin.articles.update', $article->id) }}">
                @method('PATCH')
        @else
            <form method="POST" action="{{ route('blog.admin.articles.store') }}">
        @endif
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @include('blog.admin.articles.includes.article_edit_main_col')
                    </div>
                    <div class="col-md-3">
                        @include('blog.admin.articles.includes.article_edit_add_col')
                    </div>
                </div>
            </form>
        
        @if($article->exists)
            <br>
            <form method="POST" action="{{ route('blog.admin.articles.destroy', $article->id) }}">
                @method('DELETE')
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card card-block">
                            <div class="card-body ml-auto">
                                <button type="submit" class="btn btn-link">Удалить</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
        @endif
        
    </div>
@endsection