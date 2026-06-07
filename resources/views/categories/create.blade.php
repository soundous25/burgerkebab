@extends('layouts.app')

@section('content')
<h2>Nouvelle categorie</h2>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control
               @error('nom') is-invalid @enderror"
               value="{{ old('nom') }}">
        @error('nom')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Ordre d'affichage</label>
        <input type="number" name="ordre" class="form-control"
               value="{{ old('ordre', 0) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Statut</label>
        <select name="statut" class="form-select">
            <option value="1">Actif</option>
            <option value="0">Inactif</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Enregistrer</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Annuler</a>
</form>
@endsection