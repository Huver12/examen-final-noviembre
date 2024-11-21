<?php

namespace App\Http\Controllers;

use App\Models\AsistenteRole;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AsistenteRoleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AsistenteRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $asistenteRoles = AsistenteRole::paginate();

        return view('asistente-role.index', compact('asistenteRoles'))
            ->with('i', ($request->input('page', 1) - 1) * $asistenteRoles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $asistenteRole = new AsistenteRole();

        return view('asistente-role.create', compact('asistenteRole'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsistenteRoleRequest $request): RedirectResponse
    {
        AsistenteRole::create($request->validated());

        return Redirect::route('asistente-roles.index')
            ->with('success', 'AsistenteRole created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $asistenteRole = AsistenteRole::find($id);

        return view('asistente-role.show', compact('asistenteRole'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $asistenteRole = AsistenteRole::find($id);

        return view('asistente-role.edit', compact('asistenteRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsistenteRoleRequest $request, AsistenteRole $asistenteRole): RedirectResponse
    {
        $asistenteRole->update($request->validated());

        return Redirect::route('asistente-roles.index')
            ->with('success', 'AsistenteRole updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        AsistenteRole::find($id)->delete();

        return Redirect::route('asistente-roles.index')
            ->with('success', 'AsistenteRole deleted successfully');
    }
}
