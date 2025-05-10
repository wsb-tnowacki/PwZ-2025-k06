@extends('layout.layout')
@section('tytul','Post')
@section('podtytul', 'Szczegóły postu')
@section('tresc')
@extends('layout.layout')
@section('tytul','Edycja postu')
@section('podtytul', 'Zmień post')
@section('tresc')
@isset($post)
  <div class="for-group">
    <label for="tytul" class="form-label">Tytuł</label>
    <input type="text" class="form-control" id="tytul" name="tytul" placeholder="Podaj tytuł postu" value="{{$post->tytul}}" disabled>

  </div>
  <div class="for-group">
    <label for="autor" class="form-label">Autor</label>
    <input type="text" class="form-control" id="autor" name="autor" placeholder="Podaj autora postu" value="{{$post->autor}}" disabled>
  </div>
  <div class="for-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Podaj email autora postu" value="{{$post->email}}" disabled>
  </div>
  <div>
    Data utworzenia: <b>{{date('j F Y H:m:s',strtotime($post->created_at))}}</b>
  </div>
  <div>
    Data edycji: <b>{{date('j F Y H:m:s',strtotime($post->updated_at))}}</b>
  </div>
  <div class="for-group">
    <label for="tresc" class="form-label">Treść</label>
    <textarea name="tresc" class="form-control" id="tresc" name="tresc" cols="4" rows="5" disabled>{{$post->tresc}}</textarea>
  </div>
  <a href="{{route('post.edit', $post->id)}}"><button class="btn btn-success m-1" type="submit">Edytuj post</button></a>
</form>
@endisset
<a href="{{route('post.index')}}"><button class="btn btn-primary m-1" type="submit">Powrót do listy</button></a>
@endsection
@endsection