@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2 class="page-title">
        Liste des catégories
    </h2>

    <a href="{{ route('categories.create') }}"
       class="btn btn-delete">
        +Ajouter une catégorie
    </a>

</div>

<form action="{{ route('categories.index') }}" method="GET" class="mb-4">
    <div class="input-group">

        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="🔍Rechercher une catégorie..."
            value="{{ request('search') }}">
    </div>
</form>

<table class="table table-bordered">
    <thead class="table-dark-custom">
    
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Ordre</th>
            <th>Statut</th>
            <th>Date création</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>

                <td>{{ $category->name }}</td>

                <td>{{ $category->order }}</td>

         <td>
                  @if($category->status)
                    <span class="status-active">
                      Actif
                    </span>
                 @else
                  <span class="status-inactive">
                     Inactif
                 </span>
             @endif
         </td>

                <td>{{ $category->created_at->format('d/m/Y') }}</td>

                <td>

                    <a href="{{ route('categories.edit',$category) }}"
                       class="btn btn-edit btn-sm">
                        Modifier
                    </a>

                    <form action="{{ route('categories.destroy',$category) }}"
                          method="POST"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-delete btn-sm"
                                onclick="return confirm('Supprimer cette catégorie ?')">
                            Supprimer
                        </button>

                    </form>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">
                    Aucune catégorie trouvée
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

{{ $categories->appends(request()->query())->links() }}

@endsection