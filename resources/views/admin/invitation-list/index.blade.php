@extends('admin.layout.master')

@section('content')
    <div class="content-inner container-fluid pb-0" id="page_layout">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Invitation List List</h4>
                                <a href="{{ url('/admin/invitation-list' . '/create') }}" class="btn btn-success mr-2">
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                    Add New
                                </a>
                                <a href="#" class="btn btn-primary mr-2" data-bs-toggle="modal"
                                    data-bs-target="#importModal">
                                    <svg width="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4"
                                            d="M18.8088 9.021C18.3573 9.021 17.7592 9.011 17.0146 9.011C15.1987 9.011 13.7055 7.508 13.7055 5.675V2.459C13.7055 2.206 13.5026 2 13.253 2H7.96363C5.49517 2 3.5 4.026 3.5 6.509V17.284C3.5 19.889 5.59022 22 8.16958 22H16.0453C18.5058 22 20.5 19.987 20.5 17.502V9.471C20.5 9.217 20.298 9.012 20.0465 9.013C19.6247 9.016 19.1168 9.021 18.8088 9.021Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.4"
                                            d="M16.0842 2.56737C15.7852 2.25637 15.2632 2.47037 15.2632 2.90137V5.53837C15.2632 6.64437 16.1742 7.55437 17.2792 7.55437C17.9772 7.56237 18.9452 7.56437 19.7672 7.56237C20.1882 7.56137 20.4022 7.05837 20.1102 6.75437C19.0552 5.65737 17.1662 3.69137 16.0842 2.56737Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M15.1052 12.8838C14.8142 13.1728 14.3432 13.1748 14.0512 12.8818L12.4622 11.2848V16.1118C12.4622 16.5228 12.1282 16.8568 11.7172 16.8568C11.3062 16.8568 10.9732 16.5228 10.9732 16.1118V11.2848L9.38223 12.8818C9.09223 13.1748 8.62023 13.1728 8.32923 12.8838C8.03823 12.5948 8.03723 12.1228 8.32723 11.8308L11.1892 8.95582C11.1902 8.95482 11.1902 8.95482 11.1902 8.95482C11.2582 8.88682 11.3402 8.83182 11.4302 8.79482C11.5202 8.75682 11.6182 8.73682 11.7172 8.73682C11.8172 8.73682 11.9152 8.75682 12.0052 8.79482C12.0942 8.83182 12.1752 8.88682 12.2432 8.95382C12.2442 8.95482 12.2452 8.95482 12.2452 8.95582L15.1072 11.8308C15.3972 12.1228 15.3972 12.5948 15.1052 12.8838Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    Import Guest
                                </a>
                            </div>
                        </div>
                        <div class="card-body px-0">
                            <div class="table-responsive">
                                <table id="user-list-table" class="table table-striped" role="grid"
                                    data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Company Category</th>
                                            {{-- <th>Company Subcategory Id</th> --}}
                                            <th>Company Name</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Salutation</th>
                                            <th>Phone Number</th>
                                            <th>Business Line</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($invitationlist as $i => $item)
                                            <tr>
                                                <td>{{ $i + 1 }}</td>
                                                <td>{{ $item->company_category->category_name }}</td>
                                                {{-- <td>{{ $item->company_subcategory_id }}</td> --}}
                                                <td>{{ $item->company_name }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->salutation }}</td>
                                                <td>{{ $item->phone_number }}</td>
                                                <td>{{ $item->business_line }}</td>
                                                <td>
                                                    <div class="flex align-items-center list-user-action">
                                                        <a class="btn btn-sm btn-icon btn-primary" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="View"
                                                            href="{{ url('/admin/invitation-list/' . $item->id) }}">
                                                            <span class="btn-inner">
                                                                <svg fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    class="icon-32" width="32" height="32"
                                                                    viewBox="0 0 24 24">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12ZM17.7366 6.04606C19.4439 7.36485 20.8976 9.29455 21.9415 11.7091C22.0195 11.8933 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8933 2.05854 11.7091C4.14634 6.88 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM12.0012 14.4124C13.3378 14.4124 14.4304 13.3264 14.4304 11.9979C14.4304 10.6597 13.3378 9.57362 12.0012 9.57362C11.8841 9.57362 11.767 9.58332 11.6597 9.60272C11.6207 10.6694 10.7426 11.5227 9.65971 11.5227H9.61093C9.58166 11.6779 9.56215 11.833 9.56215 11.9979C9.56215 13.3264 10.6548 14.4124 12.0012 14.4124Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-warning" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit"
                                                            data-original-title="Edit"
                                                            href="{{ url('/admin/invitation-list/' . $item->id . '/edit') }}">
                                                            <span class="btn-inner">
                                                                <svg class="icon-20" width="20" viewbox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M15.1655 4.60254L19.7315 9.16854"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <a class="btn btn-sm btn-icon btn-danger" href="#"
                                                            onclick="confirmDelete({{ $item->id }})"
                                                            data-bs-placement="top" title="Delete">
                                                            <span class="btn-inner">
                                                                <svg class="icon-20" width="20" viewbox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                    stroke="currentColor">
                                                                    <path
                                                                        d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                    <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round"></path>
                                                                    <path
                                                                        d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                                        stroke="currentColor" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        {!! Form::open([
                                                            'method' => 'DELETE',
                                                            'url' => ['/admin/invitation-list', $item->id],
                                                            'style' => 'display:inline',
                                                            'id' => 'deleteForm' . $item->id,
                                                        ]) !!}
                                                        {!! Form::close() !!}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Import Guest List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <a href="{{ route('download.template') }}" class="btn btn-sm btn-primary">Download Excel
                        Template</a><br>
                    <form action="{{ route('upload.excel') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="importFile" class="form-label">Upload Excel File</label>
                            <input type="file" class="form-control" id="importFile" name="import_file" required>
                        </div>
                        <button type="submit" class="btn btn-success">Import</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function confirmDelete(itemId) {
            // Use browser's built-in confirm dialog
            var result = confirm("Are you sure you want to delete this record?");
            if (result) {
                // If user confirms, submit the form
                var form = document.getElementById('deleteForm' + itemId); // Find the corresponding form by ID
                if (form) {
                    form.submit(); // Submit the form
                }
            }
        }
    </script>
@stop
