@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
	
	@component('admin.components.breadcrumb')
		@slot('title') Edit article @endslot
		@slot('parent') Main page @endslot
		@slot('active') Articles @endslot
	@endcomponent
	<hr />
	<form class="form-horizontal" method="post" action="{{route('admin.article.update', $article)}}">
		<input type="hidden" name="_method" value="put">
		{{csrf_field()}}

		@include('admin.articles.partials.form')
		
		<input type="hidden" name="modified_by" value="{{Auth::id() }}">
	</form>
		
</div>