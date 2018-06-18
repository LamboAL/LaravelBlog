<label for="">Status</label>
<select class="form-control" name="published" id="">
	@if (isset($article->id))
		<option value="0" @if($article->published == 0) selected="" @endif> Published</option>
		<option value="1" @if($article->published == 1) selected="" @endif> No published</option>
	@else
		<option value="0"> Published</option>
		<option value="1"> No published</option>
	@endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="News title" value="{{$article->title or ""}}" required>
<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Auto generate" value="{{$article->slug or ""}}" readonly="">

<label for="">Parents category</label>
<select name="categories[]" class="form-control" multiple="" id="">
	@include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Short description</label>
<textarea class="form-control" id="description_short" name="description_short">{{ $article->description_short or ""}}</textarea>

<label for="">Full description</label>
<textarea class="form-control" id="description" name="description">{{ $article->description or ""}}</textarea>
<hr />

<label for="">Meta title</label>
<input class="form-control" type="text" name="meta_title" placeholder="Meta title" value="{{ $article->meta_title or "" }}">


<label for="">Meta description</label>
<input class="form-control" type="text" name="meta_description" placeholder="Meta description" value="{{ $article->meta_description or "" }}">


<label for="">Meta keywords</label>
<input class="form-control" type="text" name="meta_keywords" placeholder="Meta keywords" value="{{ $article->meta_keyword or "" }}">

<input type="submit" class="btn btn-primary" value="Save">