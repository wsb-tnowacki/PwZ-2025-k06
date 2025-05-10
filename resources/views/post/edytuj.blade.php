@extends('layout.layout')
@section('tytul','Edycja postu')
@section('podtytul', 'Zmień post')
@section('tresc')
@isset($post)
<form action="{{route('post.update',$post->id)}}" method="post">
    @csrf
    @method('PUT')
  <div class="for-group">
    <label for="tytul" class="form-label">Tytuł</label>
    <input type="text" class="form-control" id="tytul" name="tytul" placeholder="Podaj tytuł postu" value="@if(old('tytul') !== null){{old('tytul')}}@else{{$post->tytul}}@endif">
    @if ($errors->has('tytul'))
      @foreach ($errors->get('tytul') as $error)
        <div style="color: red">{{$error}}</div>
      @endforeach
    @endif
  </div>
  <div class="for-group">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" class="form-control" id="autor" name="autor" placeholder="Podaj autora postu" value="@if(old('autor') !== null){{old('autor')}}@else{{$post->autor}}@endif">
    @error('autor')
      <div style="color: red">{{$message}}</div>
    @enderror
  </div>
  <div class="for-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Podaj email autora postu" value="@if(old('email') !== null){{old('email')}}@else{{$post->email}}@endif">
        @error('email')
      <div style="color: red">{{$message}}</div>
    @enderror
  </div>
  <div class="for-group">
    <label for="tresc" class="form-label">Treść</label>
    <textarea name="tresc" class="form-control" id="tresc" name="tresc" cols="4" rows="5">@if(old('tresc') !== null){{old('tresc')}}@else{{$post->tresc}}@endif</textarea>
        @error('tresc')
      <div style="color: red">{{$message}}</div>
    @enderror
  </div>
  <button class="btn btn-success m-1" type="submit">Zmień post</button>
</form>
@endisset
<a href="{{route('post.index')}}"><button class="btn btn-primary m-1" type="submit">Powrót do listy</button></a>
@endsection