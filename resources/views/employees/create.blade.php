@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.create-new-employee') }}</div>
                <form method="POST" action="/employees/store">
                    {{ csrf_field() }}
                    <div class="form-group" style="padding:20px">
        
                        <label for="first_name">{{ __('messages.first-name') }}</label>
                        <input class="form-control" id="first_name" name="first_name" aria-describedby="first name" placeholder="{{ __('messages.enter-first') }}" >
                        
                        <label for="last_name">{{ __('messages.last-name') }}</label>
                        <input class="form-control" id="last_name" name="last_name" aria-describedby="last name" placeholder="{{ __('messages.enter-last') }}" >
        
                        <label for="company_id">{{ __('messages.company') }}</label>
                        <select name="company_id" class="form-control" id="company_id" aria-describedby="Company">
                            <option selected disabled hidden>{{ __('messages.choose-company') }}</option>
                            @foreach ($allCompanies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                            
                        </select>

                        <label for="email">{{ __('messages.email') }}</label>
                        <input  class="form-control" id="email" name="email" aria-describedby="email" placeholder="{{ __('messages.enter-email') }}" >
        
                        <label for="phone">{{ __('messages.phone') }}</label>
                        <input class="form-control" id="phone" name="phone" aria-describedby="phone" placeholder="{{ __('messages.enter-phone') }}" >
                    
                    <button type="submit" class="btn btn-primary" style="margin-top:10px; margin-bottom:10px">{{ __('messages.create') }}</button>
                    @include ('errors')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection