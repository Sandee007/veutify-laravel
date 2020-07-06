@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        {{-- <div class="sidebar" id="sidebar" >
            <example-component></example-component>
        </div> --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div>වැඩේ ගොඩ ....  වමේ vue ... දකුණේ blade </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
n!
            </div>
        </div>
    </div>
</div>
@endsection
