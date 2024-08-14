@extends('admin.layout.master')

@section('content')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">GuestList Detail</h4>
                        </div>
                    </div>
                    <div class="card-body px-0">
                        <div class="table-responsive">
                            <table class="table table-striped" role="grid">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $guestlist->id }}</td>
                                    </tr>
                                    <tr><th> Uuid </th><td> {{ $guestlist->uuid }} </td></tr><tr><th> Invitation Id </th><td> {{ $guestlist->invitation_id }} </td></tr><tr><th> Accepted Email </th><td> {{ $guestlist->accepted_email }} </td></tr><tr><th> Presence Status </th><td> {{ $guestlist->presence_status }} </td></tr>
                                </tbody>
                            </table>
                            <a href="{{ url('/admin/guest-list') }}"><button class="btn btn-warning btn-sm"><i class="fa fa-close" aria-hidden="true"></i> Back</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection