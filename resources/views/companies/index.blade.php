@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('messages.companies') }}</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">{{ __('messages.name') }}</th>
                            <th scope="col">{{ __('messages.email') }}</th>
                            <th scope="col">{{ __('messages.logo') }}</th>
                            <th scope="col">{{ __('messages.website') }}</th>
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
                                    <a href="/companies/{{$company->id}}/logo">{{ __('messages.open') }}</a>
                                     | 
                                    <a href="/companies/{{$company->id}}/getlogo">{{ __('messages.save') }}</a>
                                </td>
                                <td>{{$company->website}}</td>
                                <td>
                                    <a href="/companies/{{ $company->id }}/edit">
                                        <button  type="button" class="btn btn-warning">{{ __('messages.edit') }}</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="/companies/{{ $company->id }}/destroy">
                                        <button type="button" class="btn btn-danger">{{ __('messages.delete') }}</button>
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