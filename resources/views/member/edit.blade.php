@extends('layouts.app')

@section('title', 'Kelola Member')

@section('content')
	<div class="container mt-5">
		<div class="row">
			<div class="col">
				<h3 class="lead">Edit Member</h3>
				<hr>
			</div>
		</div>

		@if($errors->any())
			<div class="alert alert-warning">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
			</div>
		@endif

		<form action="{{ route('member.update', $id) }}" method="POST">
			@method('PUT')
			@csrf

			<div class="form-group">
				<label for="name">Nama</label>
				<input type="text" name="name" class="form-control" id="name" value="{{ $name }}">
			</div>
			<div class="form-group">
				<label for="phone">No. Hp</label>
				<input type="text" name="phone" class="form-control" id="phone" value="{{ $phone }}">
			</div>
			<div class="form-group">
				<label for="gender">Gender</label>

				<div class="form-group">
					<div class="form-check-inline">
						<input id="genderL" type="radio" name="gender" class="form-check-input" value="L" checked>
						<label class="form-check-label" for="genderL">Laki-Laki</label>
					</div>
					<div class="form-check-inline">
						<input id="genderP" type="radio" name="gender" class="form-check-input" value="P"@if($gender == 'P')
							checked
						@endif>
						<label class="form-check-label" for="genderP">Perempuan</label>
					</div>
				</div>
			</div>
			<div class="form-group clearfix">
				<button type="submit" class="btn btn-primary float-right">Edit</button>
			</div>
			<div class="form-group clearfix">
				<a href="/home" class="btn btn-danger float-right">Kembali</a>
			</div>
		</form>
	</div>
@endsection