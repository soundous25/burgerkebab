@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Categories</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">
        + Nouvelle categorie
    </a>
</div>

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Ordre</th>
            <th>Statut</th>
            <th>Date creation</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->nom }}</td>
            <td>{{ $category->ordre }}</td>
            <td>
                @if($category->statut)
                    <span class="badge bg-success">Actif</span>
                @else
                    <span class="badge bg-danger">Inactif</span>
                @endif
            </td>
            <td>{{ $category->created_at->format('d/m/Y') }}</td>
            <td>
                <a href="{{ route('categories.edit', $category) }}"
                   class="btn btn-sm btn-warning">Modifier</a>

                <form action="{{ route('categories.destroy', $category) }}"
                      method="POST" style="display:inline"
                      onsubmit="return confirm('Supprimer cette categorie ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection