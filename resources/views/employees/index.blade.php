@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('messages.employees') }}</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">{{ __('messages.first-name') }}</th>
                            <th scope="col">{{ __('messages.last-name') }}</th>
                            <th scope="col">{{ __('messages.email') }}</th>
                            <th scope="col">{{ __('messages.phone') }}</th>
                            <th scope="col">{{ __('messages.company') }} </th>
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
                                        <button  type="button" class="btn btn-warning">{{ __('messages.edit') }}</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="/employees/{{ $employee->id }}/destroy">
                                        <button type="button" class="btn btn-danger">{{ __('messages.delete') }}</button>
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