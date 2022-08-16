<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function create()
    {
        return view("admin.users.create");
    }

    public function store(UserRequest $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();

        flash('El usuario ' . $user->name . ' fue guardado en forma exitosa.')->success();
        return redirect()->route('users.index');
    }

    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(10);
        return view('admin.users.index')->with('users', $users);
    }

    public function show(User $user){
        return view('admin.users.show')->with('user', $user);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Flash::error('El usuario ' .$user->name. ' fue eliminado en forma exitosa.');
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();
        flash('El usuario ' . $user->name . ' fue actualizado en forma exitosa.')->success();
        return redirect()->route('users.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
