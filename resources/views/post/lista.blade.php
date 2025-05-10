@extends('layout.layout')
@section('tytul','Lista postów')
@section('podtytul', 'Lista postów')
@section('tresc')
   <table class="table table-striped">
<thead>
    <th scope="col">Lp</th>
    <th scope="col">Tytuł</th>
    <th scope="col">Autor</th>
    <th scope="col">Data powstania</th>
    <th scope="col">Akcja</th>
</thead>
<tbody>
    @isset($posty)
    @if($posty->count())
    @foreach ($posty as $post)
    <tr>
       <td>{{$post->id}}</td> 
       <td><a href="{{route('post.show',$post->id)}}">{{$post->tytul}}</a></td>
       <td>{{$post->autor}}</td>
       <td>{{date('j F Y',strtotime($post->created_at))}}</td>
       <td class="d-flex">
                        <a href="{{route('post.edit', $post->id)}}">
                            <button class="btn btn-success m-1" type="submit">E</button>
                        </a>
                        <form action="{{route('post.destroy', $post->id)}}" method="post" onsubmit="return confirm('Czy na pewno usunąć ten post? ')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger m-1" type="submit">X</button>
                        </form>
                    </td>
    </tr>
        
    @endforeach
    @else
    <tr>
        <td colspan="5">Nie ma żadnych postów</td>
    </tr>
    @endif
    @else
    <tr>
        <td colspan="5">Nie ma żadnych postów</td>
    </tr>
    @endisset
</tbody>
   </table>
@endsection
