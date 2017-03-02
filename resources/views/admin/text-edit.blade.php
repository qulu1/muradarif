@extends('layouts.layouts')

@section('form')

<form action= {{ url("/admin/text/" . $text->id) }} method="POST" enctype="multipart/form-data">
{!! csrf_field() !!}
{{ method_field('PATCH') }}	

		<div class="form-group">
			<label name='showman_text'>Showman Part Text:</label>
			<textarea class="ckeditor" name="showman_text">{{ $text->showman_text }}</textarea>
		</div>  
		<div class="form-group">
			<label name='singer_text'>Singer Part Text:</label>
			<textarea class="ckeditor" name="singer_text">{{ $text->singer_text }}</textarea>
		</div>  

	<button type="submit" class="btn btn-success">Submit</button>
</form> 

<script src={{ url("//cdn.ckeditor.com/4.5.7/standard/ckeditor.js")  }}></script>


@endsection