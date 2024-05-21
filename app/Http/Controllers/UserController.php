<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::create($validation);
        if ($user) {
            session()->flash('success', 'User created successfully');
            return redirect()->route('admin.users.index'); // Adjusted route name
        } else {
            session()->flash('error', 'User creation failed');
            return redirect()->route('admin.users.create');
        }
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('name', 'like', "%$query%")
                      ->orWhere('email', 'like', "%$query%")
                      ->orWhere('password', 'like', "%$query%")
                      ->get();

        return view('admin.users.index', compact('users'));
    }



    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all()); // Use update() method to update user attributes

        session()->flash('success', 'User updated successfully');
        return redirect()->route('admin.users.index'); // Adjusted route name
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('success', 'User deleted successfully');
        return redirect()->route('admin.users.index'); // Adjusted route name
    }
}
