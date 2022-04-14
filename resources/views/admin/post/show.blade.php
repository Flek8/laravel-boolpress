@extends('admin.layouts.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Visualizza Post</h1>

                <div><strong>Titolo</strong> {{$post->title}}</div>
                <div><strong>Contenuto</strong> {{$post->content}}</div>
                <div><strong>Slug</strong> {{$post->slug}}</div>
                <div><strong>Categoria</strong> {{$post->category->name}}</div>
                <div>
                    @foreach ($post->tags as $tag)
                        <span class="badge badge-primary">{{$tag->name}}</span>
                    @endforeach
                </div>
                
                <a href="{{url()->previous()}}" class="btn btn-secondary">Indietro</a>

            </div>

        </div>

    </div>
    
@endsection