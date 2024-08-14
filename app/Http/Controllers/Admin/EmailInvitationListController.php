<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use App\Models\EmailInvitationList;
use Illuminate\Http\Request;

class EmailInvitationListController extends Controller
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
        $emailinvitationlist = EmailInvitationList::latest()->paginate($perPage);
        $data['emailinvitationlist'] = $emailinvitationlist;
        return view('admin.email-invitation-list.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.email-invitation-list.create');
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
        
        EmailInvitationList::create($requestData);
        alert()->success('New ' . 'EmailInvitationList'. ' Created!' );

        return redirect('admin/email-invitation-list');
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
        $emailinvitationlist = EmailInvitationList::findOrFail($id);

        return view('admin.email-invitation-list.show', compact('emailinvitationlist'));
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
        $emailinvitationlist = EmailInvitationList::findOrFail($id);
        $data['emailinvitationlist'] = $emailinvitationlist;
        return view('admin.email-invitation-list.edit', $data);
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
        
        $emailinvitationlist = EmailInvitationList::findOrFail($id);
        alert()->success('Record Updated!' );
        $emailinvitationlist->update($requestData);

        return redirect('admin/email-invitation-list');
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
        EmailInvitationList::destroy($id);

        return redirect('admin/email-invitation-list');
    }
}
