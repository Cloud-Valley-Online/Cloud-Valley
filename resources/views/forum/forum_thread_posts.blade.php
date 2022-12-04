@extends('layouts.app')

@section('title', 'Gaiaonline')

@section('content')
    <div class="container-fluid posts-main-content-wrapper" style="margin-top:50px;">
        <div class="row">
            <div class="col-sm-12 breadcrumbs">
                Forums >> General Chat >> Chatterbox
            </div>      
                        
            {{-- @isset($posts) 
                        @foreach ($posts as $post)
                            {{$post->post_text}}
                        @endforeach
                    @endisset --}}
        </div>

        <div class="row title-area">
            <div class="col-sm-12">
                <h2>This is the first thread!</h2>
            </div>
        </div>

        <div class="row thread-tools-area">
            <div class="col-sm-3 thread-buttons">
                <div class="row align-items-start">
                    <div class="col">
                        <button type="button" class="btn btn-primary">Reply</button>
                        <button type="button" class="btn btn-primary">Subscrive</button>
                        <button type="button" class="btn btn-primary">Report</button>
                    </div>

                </div>
            </div>
            <div class="col-sm-9 thread-buttons">
                <div class="row align-items-start">
                    <div class="col">
                      <div class="btn-group">
                        <a href="#" class="btn btn-primary">Lock</a>
                        <a href="#" class="btn btn-primary">Sticky</a>
                        <a href="#" class="btn btn-primary">Move</a>
                      </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row pagination">
            1 2 3
        </div>
        <hr>

        
       
    </div>
@endsection