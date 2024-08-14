<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Models\CompanySubcategory;
use Illuminate\Http\Request;

class CompanySubcategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = 25;
        $companysubcategory = CompanySubcategory::latest()->paginate($perPage);
        $data['companysubcategory'] = $companysubcategory;
        return view('admin.company-subcategory.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.company-subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        CompanySubcategory::create($requestData);
        alert()->success('New ' . 'CompanySubcategory'. ' Created!' );

        return redirect('admin/company-subcategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $companysubcategory = CompanySubcategory::findOrFail($id);

        return view('admin.company-subcategory.show', compact('companysubcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $companysubcategory = CompanySubcategory::findOrFail($id);
        $data['companysubcategory'] = $companysubcategory;
        return view('admin.company-subcategory.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $companysubcategory = CompanySubcategory::findOrFail($id);
        alert()->success('Record Updated!' );
        $companysubcategory->update($requestData);

        return redirect('admin/company-subcategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        alert()->success('Record Deleted!' );
        CompanySubcategory::destroy($id);

        return redirect('admin/company-subcategory');
    }
}
