<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CatalogoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $catalogos = Catalogo::paginate();

        return view('catalogo.index', compact('catalogos'))
            ->with('i', ($request->input('page', 1) - 1) * $catalogos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $catalogo = new Catalogo();

        return view('catalogo.create', compact('catalogo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CatalogoRequest $request): RedirectResponse
    {
        Catalogo::create($request->validated());

        return Redirect::route('catalogos.index')
            ->with('success', 'Catalogo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $catalogo = Catalogo::find($id);

        return view('catalogo.show', compact('catalogo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $catalogo = Catalogo::find($id);

        return view('catalogo.edit', compact('catalogo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CatalogoRequest $request, Catalogo $catalogo): RedirectResponse
    {
        $catalogo->update($request->validated());

        return Redirect::route('catalogos.index')
            ->with('success', 'Catalogo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Catalogo::find($id)->delete();

        return Redirect::route('catalogos.index')
            ->with('success', 'Catalogo deleted successfully');
    }
}
