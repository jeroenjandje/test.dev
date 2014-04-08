@extends('layouts.back.admin')

@section('bodyid')
@stop

@section('menu')
@stop

@section('notification')
@stop

@section('sidebar')
	@include('layouts.back.menus.adminmenu')
@stop

@section('content')

<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
<div class="panel panel-danger">
	<div class="panel-body"><a href="{{{URL::route('admin.users.create') }}}" class="btn btn-sm btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> Add new user</a></div>
</div>
	<table class="table table-bordered table-hover">
		<tr>
			<th></th>
			<th>id</th>
			<th>username</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Email</th>
			<th>Edit user</th>
		</tr>
	
		@foreach($users as $user)
			<tr>
				<td><img src="{{URL::to($user->image)}}" class="profile-pic-thumb"></td>
				<td>{{$user->id}}</td>
				<td>{{$user->username}}</td>
				<td>{{$user->firstname}}</td>
				<td>{{$user->lastname}}</td>
				<td>{{$user->email}}</td>
				<td><a href="{{ URL::route('admin.users.edit',[$user->username]) }}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span></a></td>
			</tr>
		@endforeach
	</table>
</div>
@stop

@section('footer')
@stop