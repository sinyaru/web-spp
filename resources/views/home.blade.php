@extends('layouts.backend.app')
@section('title', 'Home')
@section('content_title', 'Home')

@section('content')
<x-alert></x-alert>

<div class="row">
	<div class="col-lg">
		<div class="jumbotron">

			{{-- HOME UNTUK ADMIN & PETUGAS --}}
			@role('admin|petugas')
			@php
			$petugas = Universe::petugas();
			@endphp

			<h1 class="display-4">
				Hello,
				{{ $petugas ? $petugas->nama_petugas : Auth::user()->username }}!
			</h1>
			@endrole

			{{-- HOME UNTUK SISWA --}}
			@role('siswa')
			@php
			$siswa = Universe::siswa();
			@endphp

			<h1 class="display-4">
				Hello,
				{{ $siswa ? $siswa->nama_siswa : Auth::user()->username }}!
			</h1>
			@endrole

			<p class="lead">Selamat datang di WEB SPP.</p>
			<hr class="my-4">
		</div>
	</div>
</div>
@endsection