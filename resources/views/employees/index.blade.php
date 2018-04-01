@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Employees: </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Company </th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allEmployees as $employee)
                            <tr>
                                <td>{{$employee->first_name}}</td>
                                <td>{{$employee->last_name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
                                @foreach ($allCompanies as $company)
                                    @if ($employee->company_id == $company->id)
                                        <td>{{$company->name}}</td>
                                    @endif
                                @endforeach
                                

                                <td>
                                    <a href="/employees/{{ $employee->id }}/edit">
                                        <button  type="button" class="btn btn-warning">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="/employees/{{ $employee->id }}/destroy">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $allEmployees->links()}}
        </div>
    </div>
</div>
@endsection