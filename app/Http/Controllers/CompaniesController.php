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
        //
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
