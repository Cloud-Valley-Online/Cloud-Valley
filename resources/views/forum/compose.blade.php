@extends('layouts.app')

@section('title', 'Cloud Valley | New Thread')

@section('content')

    <x-head.tinymce-config />

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

                        <li class="breadcrumb-item active" aria-current="page"> <a href="http://localhost/forum/town-square/1">Town Square</a> </li>

                    </ol>

                </nav>

            </div>

        </div>

        <div class="row">

            <div class="col-sm-8">

                <!-- Load TinyMCE config -->
                <x-head.tinymce-config />

                <form method="post">

                    <textarea id="myeditorinstance"></textarea>

                </form>

            </div>

            <div class="col-sm-4">

                Post options

            </div>

        </div>

    </div>

@endsection
