@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Category count - {{ $count_categories }}</span></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Materials count - {{ $count_articles }}</span></p>
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
			<div class="row">
				<div class="col-sm-6">
					<a href="{{route('admin.category.create')}}" class="btn btn-block btn-default"><i class="fa fa-plus-square-o"></i>Create category</a>
					@foreach ($categories as $category)
						<a class="list-group-item" href="{{ route('admin.category.edit', $category) }}">
							<h4 class="list-group-item-heading">{{ $category->title }}</h4>
							<p class="list-group-item-text">
								{{ $category->articles()->count() }}
							</p>
						</a>	
					@endforeach
					
				</div>
			
				<div class="col-sm-6">
					<a href="#" class="btn btn-block btn-default">Create material</a>
					@foreach ($articles as $article)
						<a class="list-group-item" href="{{ route('admin.article.edit', $article) }}">
							<h4 class="list-group-item-heading">{{ $article->title }}</h4>
							<p class="list-group-item-text">
								{{ $article->categories()->pluck('title')->implode(', ') }}
							</p>
						</a>	
					@endforeach
				</div>
			</div>			
		</div>	
	</div>
	
@endsection