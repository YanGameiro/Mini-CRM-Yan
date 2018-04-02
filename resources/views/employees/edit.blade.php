@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.edit-employee') }} {{$employee->first_name}}</div>
                <form method="POST" action="/employees/{{$employee->id}}/update">
                    {{ csrf_field() }}
                    <div class="form-group" style="padding:20px">
        
                        <label for="first_name">{{ __('messages.first-name') }}</label>
                        <input class="form-control" id="first_name" name="first_name" aria-describedby="first name" value="{{$employee->first_name}}" >
                        
                        <label for="last_name">{{ __('messages.last-name') }}</label>
                        <input class="form-control" id="last_name" name="last_name" aria-describedby="last name" value="{{$employee->last_name}}" >
        
                        <label for="company_id">{{ __('messages.company') }}</label>
                        <select name="company_id" class="form-control" id="company_id" aria-describedby="Company">
                            @foreach ($allCompanies as $company)
                                @if ($company->id == $employee->company_id)
                                    <option value="{{$company->id}}" selected>{{$company->name}} <!--**current**--></option>
                                @else
                                    <option value="{{$company->id}}">{{$company->name}}</option>
                                @endif
                            @endforeach
                            
                        </select>

                        <label for="email">{{ __('messages.email') }}</label>
                        <input  class="form-control" id="email" name="email" aria-describedby="email" value="{{$employee->email}}" >
        
                        <label for="phone">{{ __('messages.phone') }}</label>
                        <input class="form-control" id="phone" name="phone" aria-describedby="phone" value="{{$employee->phone}}" >
                        <div style="margin-top:10px">
                                <button type="submit" class="btn btn-primary" >{{ __('messages.edit') }}</button>
                                <a href="/employees/index" class="btn btn-danger">{{ __('messages.cancel') }}</button></a>
                            </div>
                    @include ('errors')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection