<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee as Employee;
use App\Company as Company;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }   

    public function index()
    {
        $allCompanies = Company::All();
        $allEmployees = Employee::latest()->paginate(10);
        return view('employees.index',compact('allEmployees','allCompanies'));
    }

    public function create()
    {
        $allCompanies = Company::All();
        return view('employees.create', compact('allCompanies'));
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
        return redirect('/employees/index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Employee $employee)
    {
        $allCompanies = Company::All();
        return view('employees.edit', compact('allCompanies','employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $this->validate(request(),[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company_id' => 'required',
        ]);

        $employee->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'company_id' => request('company_id'),
        ]);
        return redirect('/employees/index');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect('employees/index'); 
    }
}
