@extends('layouts.layouts')

@section('content')
	<tr>
		<th>Photo</th> 
		<th>Music Name</th> 
		<th>Music</th> 
		<th class="text-center">Action</th>
	</tr>
	@foreach($singer as $key)
	<tr>
		<td><img style="width: 100px;height: 100px;" src="/images/{{ $key->photo }}"></td> 
		<td>{{$key->music_name}}</td>
		<td>{{$key->music}}</td>
		<td><a href= {{ url("/admin/singer/" . $key->id . "/edit") }} class="btn btn-success">Update</a></td>
		<td><a href= {{ url("/admin/singer/" . $key->id . "/delete") }} class="btn btn-danger">Delete</a></td>
	</tr>
	@endforeach
@endsection

@section('form')
	<hr>	
	<form action={{ url('/admin/singer') }} method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
		<div class="form-group">
			<label name='photo'>Photo:</label>
			<input type="file" class="form-control" name="photo">
		</div>
		<div class="form-group">
			<label name='music_name'>Music Name:</label>
			<input type="text" class="form-control" name="music_name">
		</div>		
		<div class="form-group">
			<label name="music" for="music">Music:</label>
			<input type="file" class="form-control" name="music">
		</div>	  
		<button type="submit" class="btn btn-success">Submit</button>
	</form>  

<script src={{ url("//cdn.ckeditor.com/4.5.7/standard/ckeditor.js")  }}></script>

@endsection