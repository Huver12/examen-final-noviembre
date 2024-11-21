<?php

namespace App\Http\Controllers;

use App\Models\EventoCorporativoTipo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EventoCorporativoTipoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EventoCorporativoTipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $eventoCorporativoTipos = EventoCorporativoTipo::paginate();

        return view('evento-corporativo-tipo.index', compact('eventoCorporativoTipos'))
            ->with('i', ($request->input('page', 1) - 1) * $eventoCorporativoTipos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $eventoCorporativoTipo = new EventoCorporativoTipo();

        return view('evento-corporativo-tipo.create', compact('eventoCorporativoTipo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventoCorporativoTipoRequest $request): RedirectResponse
    {
        EventoCorporativoTipo::create($request->validated());

        return Redirect::route('evento-corporativo-tipos.index')
            ->with('success', 'EventoCorporativoTipo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $eventoCorporativoTipo = EventoCorporativoTipo::find($id);

        return view('evento-corporativo-tipo.show', compact('eventoCorporativoTipo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $eventoCorporativoTipo = EventoCorporativoTipo::find($id);

        return view('evento-corporativo-tipo.edit', compact('eventoCorporativoTipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventoCorporativoTipoRequest $request, EventoCorporativoTipo $eventoCorporativoTipo): RedirectResponse
    {
        $eventoCorporativoTipo->update($request->validated());

        return Redirect::route('evento-corporativo-tipos.index')
            ->with('success', 'EventoCorporativoTipo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        EventoCorporativoTipo::find($id)->delete();

        return Redirect::route('evento-corporativo-tipos.index')
            ->with('success', 'EventoCorporativoTipo deleted successfully');
    }
}
