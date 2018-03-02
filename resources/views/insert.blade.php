@extends('layouts.base')
@section('titre', 'Ajouter un Livre')
@section('main')
<h1 id="ajout">Ajout d'un livre</h1>

<div class="formulaire">
{{ Form::open(['url' => '/insert', 'class' => 'form-base']) }}

<div class="form-group">
{{ Form::label('title', 'Titre du Livre')}}
{{ Form::text('title') }}
</div>

<div class="form-group">
{{ Form::label('author', 'Auteur du livre')}}
{{ Form::text('author') }}
</div>

<div class="form-group">
{{ Form::label('genre', 'Genre')}}
{{ Form::select('genre', $genres) }}
</div>

<div class="form-group">
{{ Form::label('excerpt', 'Résumé')}}
{{ Form::text('excerpt') }}
</div>
@foreach($translations as $translation)
<div class="form-group">
    {{ Form::label('translations', $translation->name)}}
    {{ Form::checkbox('translations[]', $translation->id,'') }}
    </div>
@endforeach


<br>

{{ Form::submit('Créer Livre')}}
{{ Form::close() }}


@endsection