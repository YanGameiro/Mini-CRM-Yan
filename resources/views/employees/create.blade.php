@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new Employee</div>
                <form method="POST" action="/employees/store">
                    {{ csrf_field() }}
                    <div class="form-group" style="padding:20px">
        
                        <label for="first_name">First Name</label>
                        <input class="form-control" id="first_name" name="first_name" aria-describedby="first name" placeholder="Enter first name" >
                        
                        <label for="last_name">Last Name</label>
                        <input class="form-control" id="last_name" name="last_name" aria-describedby="last name" placeholder="Enter last name" >
        
                        <label for="company_id">Company</label>
                        <select name="company_id" class="form-control" id="company_id" aria-describedby="Company">
                            <option selected disabled hidden>Choose one Company</option>
                            @foreach ($allCompanies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                            
                        </select>

                        <label for="email">Email address</label>
                        <input  class="form-control" id="email" name="email" aria-describedby="email" placeholder="Enter email" >
        
                        <label for="phone">Phone number</label>
                        <input class="form-control" id="phone" name="phone" aria-describedby="phone" placeholder="Enter phone number" >
                    
                    <button type="submit" class="btn btn-primary" style="margin-top:10px; margin-bottom:10px">Create</button>
                    @include ('errors')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection