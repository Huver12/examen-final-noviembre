<?php

namespace App\Http\Controllers;

use App\Models\EventoCorporativo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EventoCorporativoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EventoCorporativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $eventoCorporativos = EventoCorporativo::paginate();

        return view('evento-corporativo.index', compact('eventoCorporativos'))
            ->with('i', ($request->input('page', 1) - 1) * $eventoCorporativos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $eventoCorporativo = new EventoCorporativo();

        return view('evento-corporativo.create', compact('eventoCorporativo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventoCorporativoRequest $request): RedirectResponse
    {
        EventoCorporativo::create($request->validated());

        return Redirect::route('evento-corporativos.index')
            ->with('success', 'EventoCorporativo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $eventoCorporativo = EventoCorporativo::find($id);

        return view('evento-corporativo.show', compact('eventoCorporativo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $eventoCorporativo = EventoCorporativo::find($id);

        return view('evento-corporativo.edit', compact('eventoCorporativo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventoCorporativoRequest $request, EventoCorporativo $eventoCorporativo): RedirectResponse
    {
        $eventoCorporativo->update($request->validated());

        return Redirect::route('evento-corporativos.index')
            ->with('success', 'EventoCorporativo updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        EventoCorporativo::find($id)->delete();

        return Redirect::route('evento-corporativos.index')
            ->with('success', 'EventoCorporativo deleted successfully');
    }
}
