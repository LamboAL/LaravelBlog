<label for="">Status</label>
<select class="form-control" name="published" id="">
	@if (isset($category->id))
		<option value="1" @if($category->published == 1) selected="" @endif> Published</option>
		<option value="0" @if($category->published == 0) selected="" @endif> No published</option>
	@else
		<option value="1"> Published</option>
		<option value="0"> No published</option>
	@endif
</select>

<label for="">Name</label>
<input type="text" class="form-control" name="title" placeholder="Category header" value="{{$category->title or ""}}" required>
<label for="">Slug</label>
<input type="text" class="form-control" name="slug" placeholder="Auto generate" value="{{$category->slug or ""}}" readonly="">

<label for="">Parents category</label>
<select name="parent_id" class="form-control" id="">
	<option value="0">-- no parents category --</option>
	@include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<hr />

<input type="submit" class="btn btn-primary" value="Save">