<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \App\Company as Company;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $allCompanies = Company::latest()->paginate(10);
        return view('companies.index',compact('allCompanies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
            'logo' => 'required|image|dimensions:min_height=100,min_width=100'
        ]);

        $img_name = time().'.'.$request->logo->getClientOriginalExtension();
        $path = Storage::putFileAs('/public',$request->logo,$img_name);


       Company::create([
            'name' => request('name'),
            'email' => request('email'),
            'logo' => $img_name,
            'website' => request('website')
        ]);
        return redirect('companies/index');
    }



    public function show($id)
    {
        //
    }

    public function edit(Company $company)
    {
        return view('companies.edit',compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
            'logo' => 'image|dimensions:min_height=100,min_width=100'
        ]);

        if($request->logo != null){
            $img_name = time().'.'.$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('\storage/app/public'), $img_name);
        
            $company->update([
                'name' => request('name'),
                'email' => request('email'),
                'logo' => $img_name,
                'website' => request('website')
            ]);
        }
        else{
            $company->update([
                'name' => request('name'),
                'email' => request('email'),
                'website' => request('website')
            ]);
        }
        return redirect('companies/index');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect('companies/index');    
    }
}
