@extends('layouts.layouts')

@section('form')

<form action= {{ url("/admin/singer/" . $singer->id) }} method="POST" enctype="multipart/form-data">
{!! csrf_field() !!}
{{ method_field('PATCH') }}	

	<div class="form-group">
		<label name='photo'>Photo:</label>
		<input type="file" class="form-control" name="photo" value="{{$singer->photo}}">
	</div>
	<div class="form-group">
		<label name='music_name'>Title:</label>
		<input type="text" class="form-control" name="music_name" value="{{$singer->music_name}}">
	</div>		
	<div class="form-group">
		<label for="music">Video Music:</label>
		<input type="file" class="form-control" name="music" value="{{$singer->music}}">
	</div>	  
	<button type="submit" class="btn btn-success">Submit</button>
</form> 

<script src={{ url('"//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"') }} ></script>


@endsection