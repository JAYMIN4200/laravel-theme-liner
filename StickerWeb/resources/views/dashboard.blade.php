@extends('layout.app')
@push('title')
<title>Dashboard</title>
@endpush
@section('content')
<div class="container-fluid">
	<!-- START: Breadcrumbs-->
	<div class="row">
		<div class="col-12  align-self-center">
			<div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
				<div class="w-sm-100 mr-auto"><h4 class="mb-0">Dashboard</h4> <b>Welcome to liner admin panel</b></div>
				<ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
