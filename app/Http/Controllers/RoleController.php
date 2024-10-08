<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RoleStoreRequest;
use App\Http\Requests\RoleUpdateRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->authorizeAction('view-roles');

        $pageTitle = 'Roles';

        $roles = Role::all();

        return view('roles.index', compact('roles', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $this->authorizeAction('create-roles');

        $pageTitle = 'Create';

        return view('roles.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleStoreRequest $request): RedirectResponse
    {
        Role::create($request->validated());

        toast_message('success', 'Role created successfully.');
        
        return Redirect::route('roles.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role): View
    {
        $this->authorizeAction('update-roles');
        
        $pageTitle = 'Edit';
        
        return view('roles.edit', compact('role', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleUpdateRequest $request, Role $role): RedirectResponse
    {
        $role->update($request->validated());
        
        toast_message('success', 'Role updated successfully.');
        
        return Redirect::route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $this->authorizeAction('delete-roles');
        
        $role->delete();

        toast_message('success', 'Role deleted successfully.');
        
        return redirect()->route('roles.index');
    }
}
