@extends('layouts.app')

@section('title', 'Admin')

@section('content')
    <div class="container mt-5">
		@if (session()->has('status'))
            <div class="alert alert-info">
                <p>{{ session('status') }}</p>
            </div>
        @endif
        <table class="table table-bordered" style="text-align:center;" id="table">
            <thead>
				<tr>
                    <th>id</th>
					<th>Gambar</th>
					<th>Nama</th>
                    <th>Tanggal Upload</th>
					<th>OPSI</th>
				</tr>
			</thead>
			<tbody>
				@foreach($gambars as $g)
				<tr>
                    <td>{{$g->id}}</td>
					<td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
					<td>{{$g->keterangan}}</td>
                    <td>{{$g->created_at}}</td>
					<td><a class="btn btn-outline-danger" href="{{ route('gambar.hapus',$g->id) }}">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
        </table>
    </div>
@endsection

@push('js')
	<script type="text/javascript">
		$(document).ready(function() {
			$("#table").DataTable();
		});
	</script>
@endpush
