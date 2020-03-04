@extends('layout')

@section('content')

<div class="col-md-8 content-main">
    <div class="content-grid">
        @foreach($articles as $article)
            <div class='content-grid-info'>
                <div class='content-grid-info-image'>
                    <img class='content-grid-info-image' src='#' alt=''/>
                </div>
                <div class='post-info'>
                <h4>
                    <a href=''>{{ $article->title }}</a>  {{ $article->created_at }} Категория
                </h4>
                <p>{{ $article->excerpt }}</p>
                <a href='single.php?id=$this->id'><span></span>READ MORE</a>
                </div>
            </div>
        @endforeach
    </div>
    {{ $articles->links() }}
</div>

@endsection