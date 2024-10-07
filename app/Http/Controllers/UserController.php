<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pageTitle = 'Users';
        $users = User::all();
        return view('users.index', compact('users', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $pageTitle = 'Create';
        return view('users.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        User::create($request->validated());

        toast_message('success', 'User created successfully.');

        return Redirect::route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        $pageTitle = 'Edit User';
        return view('users.edit', compact('user', 'pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());

        toast_message('success', 'User updated successfully.');

        return Redirect::route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        toast_message('success', 'User deleted successfully.');

        return Redirect::route('users.index');
    }
}
