@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.create-new-company') }}</div>
                <form method="POST" action="/companies/store" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group" style="padding:20px">
        
                        <label for="name">{{ __('messages.name') }}</label>
                        <input class="form-control" id="name" name="name" aria-describedby="name" placeholder="{{ __('messages.enter-name') }}" >
        
                        <label for="email">{{ __('messages.email-address') }}</label>
                        <input  class="form-control" id="email" name="email" aria-describedby="email" placeholder="{{ __('messages.enter-email') }}" >
        
                        <label for="logo">{{ __('messages.logo-minimum') }}</label>
                        <input type="file" class="form-control" id="logo" name="logo" aria-describedby="logo" >
                        
                        <label for="website">{{ __('messages.website') }}</label>
                        <input class="form-control" id="website" name="website" aria-describedby="website" placeholder="{{ __('messages.enter-website') }}" >
                        
                    
                    <button type="submit" class="btn btn-primary" style="margin-top:10px; margin-bottom:10px">{{ __('messages.create') }}</button>
                    @include ('errors')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection