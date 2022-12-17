@extends('layouts.app')

@section('content')

    <x-head.tinymce-config-default />

    <div class="container posts-main-content-wrapper p-3 rounded" style="background: white;">

        <div class="row">

            <div class="col-1" style="width:55px;">

                <img src="https://graphics.gaiaonline.com/images/forum/ic/quick_23.gif" alt="Chatterbox">

            </div>

            <div class="col-11 pt-2">

                <h2>Post a new thread</h2>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-12">

                <nav aria-label="breadcrumb">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="#">Cloud Valley</a></li>

                        <li class="breadcrumb-item"><a href="#">General Forums</a></li>

                        <li class="breadcrumb-item active"> <a href="http://localhost/forum/town-square/1">Town Square</a> </li>

                        <li class="breadcrumb-item active" aria-current="page"> New Thread </li>

                    </ol>

                </nav>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-8">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form method="post" action="/forum/storethread">
                    @csrf
                    <input type="text" name="subject" class="form-control mb-1" placeholder="Thread topic" required>
                    <input type="text" name="tags" class="form-control mb-1" placeholder="Example: art, gaming, movies" required>
                    <textarea name="post" id="myeditorinstance"></textarea>
                    <input type="submit" class="btn btn-primary mt-1"></button>
                    <input type="hidden" name="forum_id" value={{  last(request()->segments()) }}>
                </form>

            </div>

            <div class="col-sm-4">

                Post options

            </div>

        </div>

    </div>

@endsection
