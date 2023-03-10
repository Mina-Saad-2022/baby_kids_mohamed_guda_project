@extends('layouts.default')

@section('title', 'Managed Tables')

@push('css')
	<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb float-xl-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
		<li class="breadcrumb-item active">Managed Tables</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Managed Tables <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	<!-- begin panel -->
	<div class="panel panel-inverse">
		<!-- begin panel-heading -->
		<div class="panel-heading">
			<h4 class="panel-title">Data Table - Default</h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<!-- end panel-heading -->
		<!-- begin panel-body -->
		<div class="panel-body table-responsive">
			<table id="data-table-default" class="table m-b-0 table-hover table-sm table-td-valign-middle text-center">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">gender</th>
						<th scope="col">Password</th>
						<th scope="col">phone</th>
						<th scope="col">photo</th>
						<th scope="col" colspan="2">Action</th>
					</tr>
				</thead>
				@foreach($users as $user)
				<tbody>
				<td> {{$user->id}} </td>
				<td> {{$user->name}} </td>
				<td> {{$user->email}} </td>
				<td> {{$user->gender}} </td>
				<td> {{$user->password}} </td>
				<td> {{$user-> phone}} </td>
				<td>
					@if($user->gender === 'male')
						<img class="img_user" src="https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/3_avatar-512.png" alt="">

					@else
						<img class="img_user" src="https://wwbmmc.ca/wp-content/uploads/2020/12/kisspng-computer-icons-avatar-icon-design-male-teacher-5ade176c636ed2.2763610715245044284073.png" alt="">
					@endif
{{--				<img class="img_user" src="{{asset('assets/images/avatar_user/quziz@mailinator.com.png')}}" alt="">--}}


				</td>
				<td>
					<a href="{{route('edit_user',$user->id)}}">
						<button type="submit" class="btn btn-primary btn_action_admin text-center">Edit</button>
					</a>
				</td>
					<td>
						<form action="{{route('delete')}}" method="post">
							@csrf
							@method('DELETE')
							<input name="user_id" type="hidden" value="{{$user->id}}">
							<button type="submit" class="btn btn-danger btn_action_admin text-center">Delete</button>
						</form>
					</td>

				</tbody>
				@endforeach
			</table>
		</div>
		<!-- end panel-body -->
	</div>
	<!-- end panel -->

@endsection

@push('scripts')
	<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
	<script src="/assets/js/demo/table-manage-default.demo.js"></script>
@endpush
