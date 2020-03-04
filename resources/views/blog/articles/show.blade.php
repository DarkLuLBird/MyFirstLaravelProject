@extends('layout')

@section('content')

        <div class="col-md-8 single-main">		
        	 
			<div class="single-grid">
				<h4 class="single-grid-header">{{ $article->title }}</h4>
				<img src="#" alt=""/>
				{{ $article->created_at }};
				<p>{{ $article->text }}</p>
				<h5 class="post-author_head">Written by <a href="#" rel="author">{{ $article->author }}</a></h5>
			</div>
			
			<div class="content-form">
				<h3>Оставьте комментарий</h3>
				Форма для комментиков
			</div>

			<ul class="comment-list">
				<li>Комментики</li>
			</ul>

		</div>


@endsection