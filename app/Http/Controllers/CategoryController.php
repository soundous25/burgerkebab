<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Afficher la liste
    public function index()
    {
        $categories = Category::orderBy('ordre')->get();
        return view('categories.index', compact('categories'));
    }

    // Formulaire creation
    public function create()
    {
        return view('categories.create');
    }

    // Sauvegarder
    public function store(Request $request)
    {
        $request->validate([
            'nom'   => 'required|unique:categories,nom|max:255',
            'ordre' => 'required|integer',
            'statut'=> 'required|boolean',
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')
               ->with('success', 'Categorie creee avec succes !');
    }

    // Formulaire modification
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Modifier
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nom'   => 'required|unique:categories,nom,'.$category->id.'|max:255',
            'ordre' => 'required|integer',
            'statut'=> 'required|boolean',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')
               ->with('success', 'Categorie modifiee avec succes !');
    }

    // Supprimer
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
               ->with('success', 'Categorie supprimee avec succes !');
    }
}
