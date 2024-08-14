@extends('admin.layout.master')

@section('content')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">EmailInvitationList Detail</h4>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="table-responsive">
                            <table class="table table-striped" role="grid">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $emailinvitationlist->id }}</td>
                                    </tr>
                                    <tr><th> Invitation Id </th><td> {{ $emailinvitationlist->invitation_id }} </td></tr><tr><th> Email </th><td> {{ $emailinvitationlist->email }} </td></tr><tr><th> Status </th><td> {{ $emailinvitationlist->status }} </td></tr><tr><th> Read At </th><td> {{ $emailinvitationlist->read_at }} </td></tr><tr><th> Accepted At </th><td> {{ $emailinvitationlist->accepted_at }} </td></tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/admin/email-invitation-list') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-close" aria-hidden="true"></i> Back</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection