@extends('layouts.app')

@section('content')
<h2>Modifier la categorie</h2>

<form action="{{ route('categories.update', $category) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control
               @error('nom') is-invalid @enderror"
               value="{{ old('nom', $category->nom) }}">
        @error('nom')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Ordre d'affichage</label>
        <input type="number" name="ordre" class="form-control"
               value="{{ old('ordre', $category->ordre) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Statut</label>
        <select name="statut" class="form-select">
            <option value="1" {{ $category->statut ? 'selected' : '' }}>Actif</option>
            <option value="0" {{ !$category->statut ? 'selected' : '' }}>Inactif</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Enregistrer</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Annuler</a>
</form>
@endsection