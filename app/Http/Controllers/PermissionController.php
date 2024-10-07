<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PermissionStoreRequest;
use App\Http\Requests\PermissionUpdateRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pageTitle   = 'Permissions';
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions', 'pageTitle'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pageTitle = 'Create';
        return view('permissions.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionStoreRequest $request): RedirectResponse
    {
        Permission::create($request->validated());

        toast_message('success', 'Permission created successfully.');

        return Redirect::route('permissions.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission): View
    {
        $pageTitle = 'Edit Permission';
        return view('permissions.edit', compact('permission', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionUpdateRequest $request, Permission $permission): RedirectResponse
    {
        $permission->update($request->validated());

        toast_message('success', 'Permission updated successfully.');

        return Redirect::route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        toast_message('success', 'Permission deleted successfully.');

        return Redirect::route('permissions.index');
    }
}
