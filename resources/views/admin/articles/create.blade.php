@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
	
	@component('admin.components.breadcrumb')
		@slot('title') Create article @endslot
		@slot('parent') Main page @endslot
		@slot('active') Articles @endslot
	@endcomponent
	<hr />
	<form class="form-horizontal" method="post" action="{{route('admin.article.store')}}">
		{{csrf_field()}}

		@include('admin.articles.partials.form')
		
		<input type="hidden" name="created_by" value="{{Auth::id() }}">
	</form>
		
</div>