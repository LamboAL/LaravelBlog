@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
	
	@component('admin.components.breadcrumb')
		@slot('title') Create user @endslot
		@slot('parent') Main page @endslot
		@slot('active') User @endslot
	@endcomponent
	<hr />
	<form class="form-horizontal" method="post" action="{{route('admin.user_managment.user.store')}}">
		{{csrf_field()}}

		@include('admin.user_managment.users.partials.form')
		
		
	</form>
		
</div>