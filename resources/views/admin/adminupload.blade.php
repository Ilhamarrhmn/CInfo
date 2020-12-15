@extends('layouts.app')

@section('title', 'Upload Artikel')

@section('content')
    <div class="container">
		<div class="form-group">
			<textarea class="ckeditor" id="ckedtor"></textarea>
			<button type="submit" class="btn btn-success">Simpan</button>
		</div>
	</div>
@endsection