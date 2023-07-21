<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        $data = User::all();

        return view('user.index', ['title' => 'data user'], compact('data'));
    }

    public function destroy(string $id)
    {
        if (Auth::user()->level == 'admin') {
            // Delete the member
            DB::table('users')->where('id', $id)->delete();

            // $deletedAccount = DB::table('users')->where('id', $id)->delete();
            // if ($deletedAccount) {
            //     // Display success message to the admin
            //     session()->flash('success', 'Account deleted successfully.');
            // } else {
            //     Session()->flash('error', 'Failed to delete the account.');
            // }
            return redirect()->route('user.index')
                ->with('success', 'Berhasil Hapus Data');
        } else {
            session()->flash('error', 'You are not authorized to delete this account.');
            return back();
        }
    }

    public function show()
    {
        $data = User::all();
        return view('user.index', ['title' => 'data user'], compact('data'));
    }

    // public function update(Request $request, User $user)
    // {
    //     $request->validate([
    //         'level' => 'required',
    //     ]);

    //     $user->update($request->all());

    //     return redirect()->route('user.index')
    //         ->with('Task Created Successfully!');
    // }
}
