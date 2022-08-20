<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('id') && is_numeric($request->get('id'))) {
            $user = User::findOrFail($request->get('id'));
        }else{
            $user = User::first();
        }

        return view('home', compact('user'));
    }

    public function update(UserUpdateRequest $request)
    {
        $user = User::findOrFail($request->get('id'));

        $user->name = $request->get('name');
        $user->comments = $request->get('comments');

        $user->save();

        return view('home', ['user' => $user]);
    }


}
