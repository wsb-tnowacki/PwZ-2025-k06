@extends('layout.layout')
@section('tytul','Start')
@section('podtytul', 'Strona startowa')
@section('tresc')
    <div>
        Treść dla strony startowej
        <div>
            {{--
            <ol>
                <?php foreach ($zadania ?? '' as $zadanie ) : ?>
                <li><?= $zadanie ?></li>
                <?php endforeach; ?>
            </ol>
            --}}
            <ol>
                @isset($zadania)
                    @foreach ($zadania as $zadanie)
                        <li>{{ $zadanie}}</li>
                    @endforeach                     
                @endisset
  
            </ol>
           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt ad accusantium velit sint hic assumenda eligendi delectus recusandae maiores natus, ipsum nihil architecto dolorum veritatis nisi illo eaque. Ipsa, suscipit!
        </div>
    </div>
@endsection