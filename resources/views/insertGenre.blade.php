@extends('layouts.base')
@section('titre', 'Ajouter un Livre')
@section('main')
<h1 id="ajout">Insertion de genres</h1>

<div class="formulaire">
{{ Form::open(['url' => '/insertGenre', 'class' => 'form-base']) }}

<div class="form-group">
{{ Form::label('name', 'Genre')}}
{{ Form::text('name', 'Heroic Fantasy', ['required' =>'required']) }}
</div>
<br>

{{ Form::submit('Insérer un Genre')}}
{{ Form::close() }}


@endsection