@extends('layouts.app')

@section('content')
    <div class="container main-content-wrapper border border-dark border-1 rounded p-2 shadow-sm">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 pe-2">
                <div class="flare-preview-area" style="border:1px solid red; padding-left:65px;">
                    <img src="//graphics.gaiaonline.com/images/usericons/b15c767d65e9.png"
                    alt="flare">
                <h3 style="text-shadow: 0px 0px 6px #ff0000;
                          color: #333333;">
                          {{ userIdToUsername(Auth::id()) }}
                </h3>
                </div>

                <div class="avatar-preview-area">
                    <img src="http://localhost/avatar/customize/1" width="240" height="300" alt="avatar-preview">
                </div>

                <div class="equipped-items-area" style="border:1px solid red;">
                    equipped items <br>
                    Estimated marketplace value
                </div>

                <div class="equipped-items-area">
                   Additional options
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-10" style="border:1px solid red;">
                <div>sort options</div>
                <div>flare chooser</div>
                <div>
                    @foreach ($items as $item )
                       <img src="/{{ $item->avataritem->item_image }}" alt="name">
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
