@extends('admin.layouts.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Visualizza Tag</h1>

                <div><strong>Nome</strong> {{$tag->name}}</div>
                <div><strong>Slug</strong> {{$tag->slug}}</div>
                <div>
                    <ul>
                        @foreach ($tag->posts as $post)
                        
                            <li><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></li>

                        @endforeach
                    </ul>
                </div>
                
                <a href="{{route('admin.tags.index')}}" class="btn btn-secondary">Torna alla lista</a>

            </div>

        </div>

    </div>
    
@endsection