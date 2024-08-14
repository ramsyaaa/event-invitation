@extends('admin.layout.master')

@section('content')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">InvitationList Detail</h4>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="table-responsive">
                            <table class="table table-striped" role="grid">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $invitationlist->id }}</td>
                                    </tr>
                                    <tr><th> Company Category Id </th><td> {{ $invitationlist->company_category_id }} </td></tr><tr><th> Company Subcategory Id </th><td> {{ $invitationlist->company_subcategory_id }} </td></tr><tr><th> Company Name </th><td> {{ $invitationlist->company_name }} </td></tr><tr><th> Name </th><td> {{ $invitationlist->name }} </td></tr><tr><th> Title </th><td> {{ $invitationlist->title }} </td></tr><tr><th> Salutation </th><td> {{ $invitationlist->salutation }} </td></tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/admin/invitation-list') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-close" aria-hidden="true"></i> Back</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection