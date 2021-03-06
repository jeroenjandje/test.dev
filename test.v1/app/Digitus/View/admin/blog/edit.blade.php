@extends('layouts.back.admin')

@section('title')
	Editing '{{ $post->title }}'
@stop

@section('menu')
	@include('layouts.front.menus.homemenu')
@stop

@section('sidebar')
	@include('layouts.back.menus.adminmenu')
@stop

@section('sidebar2')
@stop

@section('content')
@if($loggedUser->roles->first()->name === 'Admin')
<div class="col-10">
	@include('forms.blog.edit')
</div>
@endif
@stop