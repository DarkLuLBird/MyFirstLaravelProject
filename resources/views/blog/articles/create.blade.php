@extends('layout')

@php
    use App\Category;

    $categories = Category::all();
@endphp

@section('content')
    <div class="contact-details">			 
        {!! Form::open(['route' => ['articles.store']]) !!}
            <input type="text" name="title" placeholder="Title" value=""/>
            <textarea name="text" placeholder="Text" value=""></textarea>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>                
                @endforeach                
            </select>
            <input type="file" name="image">
            <input type="submit" value="Создать"/>
        {!! Form::close() !!}
    </div>
@endsection