<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee as Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company_id' => 'required',
        ]);

        Employee::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'company_id' => request('company_id'),
        ]);
        return redirect('/employees/create');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
