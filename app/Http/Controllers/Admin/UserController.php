<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(); // User::all();
        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request) {
        User::create($request->all());
        return redirect()
                ->route('users.index')    
                ->with('success', 'Usuário criado com sucesso');
    }

    public function update(UpdateUserRequest $request, string $id) {
        if(!$user = User::find($id)) {
            return back()->with('message', 'Usuário não encontrado');
        }
        $user->update($request->only([
            'name',
            'email',
        ]));

        return redirect()->route('users.index')->with('success', 'Usuário editado com sucesso');
    }

}
