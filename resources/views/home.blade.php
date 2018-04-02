@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.Welcome!') }}</div>

                <div class="card-body">
                    <p>{{ __('messages.logged') }}</p>
                    <p>{{ __('messages.can') }}</p>
                    <p>{{ __('messages.navegation') }}</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
