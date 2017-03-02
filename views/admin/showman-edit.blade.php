@extends('layouts.layouts')

@section('form')

<form action= {{ url("admin/showman/" . $showman->id) }} method="POST" enctype="multipart/form-data">
{!! csrf_field() !!}
{{ method_field('PATCH') }}	

	<div class="form-group">
		<label name='text'>Title:</label>
		{{-- <input type="text" class="form-control" name="text" value="{{$singer->text}}"> --}}
		<textarea name="text">{{$showman->text}}</textarea>

	</div>
	<button type="submit" class="btn btn-success">Submit</button>
</form> 

<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>


@endsection