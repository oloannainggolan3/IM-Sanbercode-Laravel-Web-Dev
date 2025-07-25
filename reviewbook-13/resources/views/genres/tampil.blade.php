@extends('layout.master')

@section('title')
    Register
@endsection

@section('section-title')
    HALAMAN tampil genre
@endsection
@section('content')
   
    <a href="/genres/create" class="btn btn-primary">Tambah Genre</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">description</th>

    </tr>
  </thead>
  <tbody>
    @forelse ($genres as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item->name }}</td>
      <td>
        <form action ="/genres/{{ $item->id }}" method="POST">
        <a href="/genres/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
        <a href="/genres/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" value = "Delete" class="btn btn-danger btn-sm">Delete</button>
    </td>
    </tr>
        @empty
        <tr>
            <td><h1>Tidak ada genres</h1></td>
        </tr>
        @endforelse
    
  </tbody>
</table>@endsection