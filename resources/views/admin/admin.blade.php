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
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomber telepon</th>
                    <th style="text-centered">actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $d)
                    <tr>
                        <td>{{ $d->id}}</td>
                        <td>{{ $d->name }}</td>
                        <td>{{ $d->gender}}</td>
                        <td>{{ $d->phone}}</td>
                        <td>
                            <a href="{{route('member.edit', $d->id)}}" class="btn btn-outline-primary">Edit</a>
                            <form action="{{route('member.destroy', $d->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('member.create') }}" class="float-right btn btn-outline-primary">Tambah</a>
    </div>
@endsection

@push('js')
	<script type="text/javascript">
		$(document).ready(function() {
			$("#table").DataTable();
		});
	</script>
@endpush
