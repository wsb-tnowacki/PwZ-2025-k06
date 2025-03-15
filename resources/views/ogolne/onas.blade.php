@extends('layout.layout')
@section('tytul','O nas')
@section('podtytul', 'O nas')
@section('tresc')
    <div>
        Treść dla strony O nas.
        <div>
            {{--
            <ol>
                <?php foreach ($zadania ?? '' as $zadanie ) : ?>
                <li><?= $zadanie ?></li>
                <?php endforeach; ?>
            </ol>
            --}}
            <ol>
            @foreach ($zadania as $zadanie)
                <li>{{ $zadanie}}</li>
            @endforeach   
            </ol>
           
        </div>
    </div>
@endsection
