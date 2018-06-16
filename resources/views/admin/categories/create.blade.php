@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
	
	@component('admin.components.breadcrumb')
		@slot('title') Create category @endslot
		@slot('parent') Main page @endslot
		@slot('active') Categories @endslot
	@endcomponent
	<hr />
	<form class="form-horizontal" method="post" action="{{route('admin.category.store')}}">
		{{csrf_field()}}

		@include('admin.categories.partials.form')
		

	</form>
		
</div>