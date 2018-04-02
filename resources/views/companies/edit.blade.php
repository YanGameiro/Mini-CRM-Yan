@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.edit-company') }} {{$company->name}}</div>
                <form method="POST" action="/companies/{{$company->id}}/update" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group" style="margin:20px;margin-bottom:0px">
        
                        <label for="name">{{ __('messages.name') }}</label>
                        <input class="form-control" id="name" name="name" aria-describedby="name" value="{{$company->name}}" >
        
                        <label for="email">{{ __('messages.email') }}</label>
                        <input  class="form-control" id="email" name="email" aria-describedby="email" value="{{$company->email}}" >
        
                        <label for="logo">{{ __('messages.logo-minimum') }}</label>
                        <input type="file" class="form-control" id="logo" name="logo" aria-describedby="logo" >
                        
                        <label for="website">{{ __('messages.website') }}</label>
                        <input class="form-control" id="website" name="website" aria-describedby="website" value="{{$company->website}}" >
                    @include ('errors')
                    </div>
                    <div style="margin:10px;margin-left:20px">
                        <button type="submit" class="btn btn-primary" >{{ __('messages.edit') }}</button>
                        <a href="/companies/index" class="btn btn-danger">{{ __('messages.cancel') }}</button></a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
@endsection