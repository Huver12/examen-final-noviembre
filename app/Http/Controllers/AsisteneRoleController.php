<?php

namespace App\Http\Controllers;

use App\Models\AsisteneRole;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AsisteneRoleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AsisteneRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $asisteneRoles = AsisteneRole::paginate();

        return view('asistene-role.index', compact('asisteneRoles'))
            ->with('i', ($request->input('page', 1) - 1) * $asisteneRoles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $asisteneRole = new AsisteneRole();

        return view('asistene-role.create', compact('asisteneRole'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AsisteneRoleRequest $request): RedirectResponse
    {
        AsisteneRole::create($request->validated());

        return Redirect::route('asistene-roles.index')
            ->with('success', 'AsisteneRole created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $asisteneRole = AsisteneRole::find($id);

        return view('asistene-role.show', compact('asisteneRole'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $asisteneRole = AsisteneRole::find($id);

        return view('asistene-role.edit', compact('asisteneRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AsisteneRoleRequest $request, AsisteneRole $asisteneRole): RedirectResponse
    {
        $asisteneRole->update($request->validated());

        return Redirect::route('asistene-roles.index')
            ->with('success', 'AsisteneRole updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        AsisteneRole::find($id)->delete();

        return Redirect::route('asistene-roles.index')
            ->with('success', 'AsisteneRole deleted successfully');
    }
}
