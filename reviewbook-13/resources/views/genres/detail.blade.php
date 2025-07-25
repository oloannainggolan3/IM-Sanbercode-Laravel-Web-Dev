@extends('layout.master')

@section('title')
    halaman detai genre
@endsection

@section('section-title') 
    HALAMAN tambah Detail
@endsection
@section('content')
    <h1 class = "text-primary">{{ $genres->name }}</h1>
    <p>{{ $genres->description }}</p>
    <a href="/genres" class="btn btn-secondary">Kembali</a>

    @endsection