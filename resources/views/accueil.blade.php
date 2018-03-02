@extends('layouts.base')
@section('title','Accueil')
@section('main')
    <table class="tableau">
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Résumé</th>
            <th>Genre</th>
            <th>Traduction</th>
            <th>Suppression</th>
            <th>UpDate</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{ $book['title'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['excerpt'] }}</td>
                <td>{{ $book->genre ? $book->genre->name : 'undefined' }}</td>
                <td> 
                @if ($book->translations)
                    @foreach ($book->translations as $translation)
                        {{ $translation->name }}
                    @endforeach
                @endif

                </td>
                <td>
                    {{ Form::open(['url' => '/delete']) }}
                        {{ Form::hidden('id',$book['id']) }}
                        {{ Form::submit('X') }}
                    {{ Form::close() }}
                </td>
                <td>
                    {{ Form::open(['url' => '/update', 'method' => 'get']) }}
                        {{ Form::hidden('id', $book['id']) }}
                        {{ Form::submit('U') }}
                    {{ Form::close() }}   
                </td>
            </tr>
        @endforeach
    </table>
@endsection