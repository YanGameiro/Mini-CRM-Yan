@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Companies: </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Logo</th>
                            <th scope="col">website</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allCompanies as $company)
                            <tr>
                                <td>{{$company->name}}</td>
                                <td>{{$company->email}}</td>
                                <td>
                                    <!-- <img src="/companies/{{$company->id}}/getlogo" alt=""> -->
                                    <a href="/companies/{{$company->id}}/logo">Open</a>
                                     | 
                                    <a href="/companies/{{$company->id}}/getlogo">Save</a>
                                </td>
                                <td>{{$company->website}}</td>
                                <td>
                                    <a href="/companies/{{ $company->id }}/edit">
                                        <button  type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="/companies/{{ $company->id }}/destroy">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $allCompanies->links()}}
        </div>
    </div>
</div>
@endsection