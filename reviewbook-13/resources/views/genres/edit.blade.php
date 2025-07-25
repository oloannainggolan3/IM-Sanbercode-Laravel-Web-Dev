@extends('layout.master')

@section('title')
    Register
@endsection

@section('section-title')
    HALAMAN edit genre
@endsection

@section('content')
   <form action ="/genres/{{ $genres->id }}" method="POST">
    @method('PUT')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach 
        </ul>
    </div>
  @endif
 
    @csrf
  <div class="mb-3">
    <label class="form-label">Genres name</label>
    <input type="text" class="form-control" name ="name" value="{{old('name', $genres->name)}}">
  </div>
  <div class="mb-3">
    <label class="form-label">genres Description</label>
    <textarea class="form-control" rows="3" name="description">{{old('description', $genres->description)}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
