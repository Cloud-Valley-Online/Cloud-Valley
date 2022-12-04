@extends('layouts.app')

@section('title', 'Gaiaonline')

@section('content')
    <div class="container-fluid main-content-wrapper" style="margin-top:50px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-content border w-75 border-dark rounded mx-auto py-3 my-3" style="background:white;">
                    @isset($forums) 
                        @foreach ($forums as $forum)
                           <a href="/forum/{{ $forum->forum_name }}/{{$forum->id }}">{{ $forum->forum_name }}</a>
                        @endforeach
                @endisset
                </div>
            </div>
        </div>
    </div>
@endsection

