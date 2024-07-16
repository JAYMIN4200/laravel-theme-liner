@extends('layout.app')

@section('content')
@push('title')
<title>Form</title>
@endpush

<div class="container-fluid">
    <!-- START: Breadcrumbs -->
    <div class="row">
        <div class="col-12 align-self-center">
            <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto"><h4 class="mb-0">Basic Form</h4></div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item">Form</li>
                    <li class="breadcrumb-item active"><a href="#">Basic</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END: Breadcrumbs -->

    <!-- START: Card Data -->
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Inputs</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form  method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control rounded" id="email" placeholder="Enter Email" value="{{ isset($form->id) ? $form->email : '' }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" value="{{ isset($form->id) ? $form->password : '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" value="{{ isset($form->id) ? $form->address : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="address2">Address 2</label>
                                        <input type="text" name="address2" class="form-control" id="address2" placeholder="Apartment, studio, or floor" value="{{ isset($form->id) ? $form->address2 : '' }}">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">City</label>
                                            <input type="text" name="city" class="form-control" id="city" placeholder="Enter City" value="{{ isset($form->id) ? $form->city : '' }}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="state">State</label>
                                            <input type="text" name="state" class="form-control" id="state" placeholder="Enter State" value="{{ isset($form->id) ? $form->state : '' }}">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="zip">Zip</label>
                                            <input type="text" name="zip" class="form-control" id="zip" placeholder="Enter Pin Code" value="{{ isset($form->id) ? $form->zip : '' }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="date">Date</label>
                                            <input type="date" name="date" class="form-control datepicker" id="date" value="{{ isset($form->id) ? $form->date : '' }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="image">Choose Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image" required>
                                                <label class="custom-file-label" for="image">Choose file...</label>
                                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="gender">Gender</label>
                                            <div class="card-body">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="customRadio1" name="gender" value="male" {{ isset($form->gender) && $form->gender === 'male' ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="customRadio1">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="female" {{ isset($form->gender) && $form->gender === 'female' ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="customRadio2">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="status">Status</label>
                                            <div class="card-header">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="status[]" value="inactive" {{ isset($form->status) && in_array('inactive', $form->status) ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="customCheck1">Inactive</label>
                                                </div>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="status[]" value="active" {{ isset($form->status) && in_array('active', $form->status) ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="customCheck2">Active</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-6">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <label for="singleSelect" class="form-label">Colors:</label>
                                                    <select id="singleSelect" class="form-select">
                                                        <option value="">Choose one thing</option>
                                                        <option value="1">Red</option>
                                                        <option value="2">Yellow</option>
                                                        <option value="3">Green</option>
                                                    </select>
                                                </div>

                                                <div class="col-6 col-lg-6 mt-3">
                                                    <label for="sizes">Sizes</label>
                                                    <div class="d-flex">
                                                        <div class="me-4">
                                                            <input type="checkbox" checked data-toggle="toggle">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="remember_me" id="remember_me" value="1" {{ isset($form->remember_me) && $form->remember_me == 1 ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="remember_me">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Card Data -->
</div>
@endsection
