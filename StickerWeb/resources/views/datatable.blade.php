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
					<h4 class="card-title">Reports</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="example" class="display table dataTable table-striped table-bordered" >
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tiger Nixon</td>
									<td>System Architect</td>
									<td>Edinburgh</td>
									<td>61</td>
									<td>2011/04/25</td>
									<td>$320,800</td>
									<td>
										<a href="#" onclick="editRow(1)"><i class="fas fa-edit text-primary"></i></a>
										<a href="#" onclick="deleteRow(1)"><i class="fas fa-trash text-danger"></i></a>
									</td>
								</tr>
								<tr>
									<td>Garrett Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>63</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
									<td>
										<a href="#" onclick="editRow(1)"><i class="fas fa-edit text-primary"></i></a>
										<a href="#" onclick="deleteRow(1)"><i class="fas fa-trash text-danger"></i></a>
									</td>
								</tr>
								<tr>
									<td>Ashton Cox</td>
									<td>Junior Technical Author</td>
									<td>San Francisco</td>
									<td>66</td>
									<td>2009/01/12</td>
									<td>$86,000</td>
									<td>
										<a href="#" onclick="editRow(1)"><i class="fas fa-edit text-primary"></i></a>
										<a href="#" onclick="deleteRow(1)"><i class="fas fa-trash text-danger"></i></a>
									</td>
								</tr>
								<tr>
									<td>Cedric Kelly</td>
									<td>Senior Javascript Developer</td>
									<td>Edinburgh</td>
									<td>22</td>
									<td>2012/03/29</td>
									<td>$433,060</td>
									<td>
										<a href="#" onclick="editRow(1)"><i class="fas fa-edit text-primary"></i></a>
										<a href="#" onclick="deleteRow(1)"><i class="fas fa-trash text-danger"></i></a>
									</td>
								</tr>

							</tbody>

						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- END: Card DATA-->
</div>

<!-- END: Content-->
@endsection
