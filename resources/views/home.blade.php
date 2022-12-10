@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::check())
                        {{ __('You are logged in!') }}
                    @else
                    {{ __('Consider logging in!') }}
                    @endif
                    <br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
