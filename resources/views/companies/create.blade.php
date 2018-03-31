@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new Company</div>
                <form method="POST" action="/companies/store" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group" style="padding:20px">
        
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" aria-describedby="name" placeholder="Enter name" >
        
                        <label for="email">Email address</label>
                        <input  class="form-control" id="email" name="email" aria-describedby="email" placeholder="Enter email" >
        
                        <label for="logo">Logo (minimum 100×100)</label>
                        <input type="file" class="form-control" id="logo" name="logo" aria-describedby="logo" >
                        
                        <label for="website">Website</label>
                        <input class="form-control" id="website" name="website" aria-describedby="website" placeholder="Enter website" >
                        
                    
                    <button type="submit" class="btn btn-primary" style="margin-top:10px">Create</button>
                    </div>
                    @include ('errors')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection