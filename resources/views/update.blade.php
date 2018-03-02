@extends('layouts.base')
@section('titre', 'Modifier un Livre')
@section('main')
<h1 id="ajout">Modifier un livre</h1>

<div class="formulaire">
    {{ Form::open(['url' => '/update', 'class' => 'form-base']) }}
    {{Form::hidden('id', $book['id'])}}
</div>

<div class="form-group">
    {{ Form::label('title', 'Titre du Livre')}}
    {{ Form::text('title', $book['title']) }}
</div>

<div class="form-group">
    {{ Form::label('author', 'Auteur du livre')}}
    {{ Form::text('author', $book['author']) }}
</div>

<div class="form-group">
    {{ Form::label('excerpt', 'Résumé')}}
    {{ Form::text('excerpt', $book['excerpt']) }}
</div>

<div class="form-group">
    {{ Form::label('genre', 'Genre')}}
    {{ Form::select('genre', $genres, $book->genre->id) }}
</div>

@foreach ($translations as $translation)
    @if($bookTranslation->id == $translation->id)
      <div class="form-group">
        {{ Form::label('translation', $translation->name) }}
        {{ Form::checkbox('translations[]', $translation->id, ['checked' => 'checked ']) }}
      </div>
      @else
    <div class="form-group">
      {{ Form::label('translation', $translation->name) }}
      {{ Form::checkbox('translations[]', $translation->id) }}
    </div>
  @endif
@endforeach
<br>

{{ Form::submit('Mettre à jour')}}
{{ Form::close() }}


@endsection