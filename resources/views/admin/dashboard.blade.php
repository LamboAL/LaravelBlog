@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Category count</span></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Materials count</span></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Users count</span></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Users today count</span></p>
				</div>
			</div>

			<div class="col-sm-6">
				<a href="{{route('admin.category.create')}}" class="btn btn-block btn-default"><i class="fa fa-plus-square-o"></i>Create category</a>

				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">First category</h4>
					<p class="list-group-item-text">
						Materials count
					</p>
				</a>	
			</div>
			
			<div class="col-sm-6">
				<a href="#" class="btn btn-block btn-default">Create material</a>
				<a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">First material</h4>
					<p class="list-group-item-text">
						Category
					</p>
				</a>	
			</div>
			
		</div>	
	</div>
	
@endsection