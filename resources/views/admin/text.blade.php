@extends('layouts.layouts')

@section('content')
	<tr>
		<th>Showman Text</th> 
		<th>Singer Text</th> 
		<th class="text-center">Action</th>
	</tr>
	@foreach($text as $key)
	<tr>
		<td>{!!$key->showman_text!!}</td>
		<td>{!!$key->singer_text!!}</td>
		<td><a href= {{ url("/admin/text/" . $key->id . "/edit") }} class="btn btn-success">Update</a></td>
		<td><a href= {{ url("/admin/text/" . $key->id . "/delete") }} class="btn btn-danger">Delete</a></td>
	</tr>
	@endforeach
@endsection

@section('form')
	<hr>	
	<form action={{ url('/admin/text') }} method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
		<div class="form-group">
			<label name='showman_text'>Showman Part Text:</label>
			<textarea class="ckeditor" name="showman_text"></textarea>
		</div>  
		<div class="form-group">
			<label name='singer_text'>Singer Part Text:</label>
			<textarea class="ckeditor" name="singer_text"></textarea>
		</div>  		
		<button type="submit" class="btn btn-success">Submit</button>
	</form>  

<script src={{ url("//cdn.ckeditor.com/4.5.7/standard/ckeditor.js")  }}></script>

@endsection