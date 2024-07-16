@extends('layout.app')
@section('content')
@push('title')
<title>Datatable</title>
@endpush

    <div class="container-fluid">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                    {{-- <div class="w-sm-100 mr-auto"><h4 class="mb-0">Datatable</h4></div> --}}

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Table</li>

                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header  justify-content-between align-items-center">
                        <h4 class="card-title">Data Table</h4>
                            <br>
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Address 2</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            @if($forms->isNotEmpty())
                                @foreach ($forms as $form)
                                    <tr>
                                        <td>{{ $form->id }}</td>
                                        <td>{{ $form->email }}</td>
                                        <td>{{ $form->address }}</td>
                                        <td>{{ $form->address2 }}</td>
                                        <td>{{ $form->city }}</td>
                                        <td>{{ $form->state }}</td>
                                        <td>{{ $form->zip }}</td>
                                        <td>{{ $form->date }}</td>
                                        <td>
                                            <a href="{{ route('form.edit',['id' => $form->id]) }}" class="btn btn-dark">Edit</a>
                                            <a href="{{ route('form.delete', $form->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- END: Card DATA-->
    </div>

<!-- END: Content-->
@endsection
