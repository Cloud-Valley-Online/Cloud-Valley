@extends('layouts.app')

@section('title', 'Gaiaonline')

@section('content')
    <div class="container-fluid main-content-wrapper">    
        <div class="row">
            <div class="col-sm-12">
                <div class="main-content border w-75 border-dark rounded mx-auto py-3 my-3" style="background:white;">
                   
                    @isset($threads) 
                        @foreach ($threads as $thread)
                            <a href="/forum/{{$thread->forum->forum_name_clean}}/{{$thread->thread_subject_clean}}/{{$thread->id}}">{{ $thread->thread_subject }}</a>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
       
    </div>
@endsection