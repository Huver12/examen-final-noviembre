<?php

namespace App\Http\Controllers;

use App\Models\Asistente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AsistenteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AsistenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $asistentes = Asistente::paginate();

        // $asistente = Asistente::with('asistenteRole')
        // ->find(13); 
        // dd($asistente); 

        return view('asistente.index', compact('asistentes'))
            ->with('i', ($request->input('page', 1) - 1) * $asistentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $asistente = new Asistente();

        return view('asistente.create', compact('asistente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsistenteRequest $request): RedirectResponse
    {
        Asistente::create($request->validated());

        return Redirect::route('asistentes.index')
            ->with('success', 'Asistente created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $asistente = Asistente::find($id);

        return view('asistente.show', compact('asistente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $asistente = Asistente::find($id);

        return view('asistente.edit', compact('asistente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsistenteRequest $request, Asistente $asistente): RedirectResponse
    {
        $asistente->update($request->validated());

        return Redirect::route('asistentes.index')
            ->with('success', 'Asistente updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Asistente::find($id)->delete();

        return Redirect::route('asistentes.index')
            ->with('success', 'Asistente deleted successfully');
    }
}
