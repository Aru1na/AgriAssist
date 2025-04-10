<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\distRequests;
use App\Models\User;


class distRequestController extends Controller
{
    public function create()
    {

    }

    public function read()
    {

    }

    public function update(Request $request)
    {
        $request->validate([
            'userID' => ['required', 'string'],
            'product' => ['required', 'string'],
            'amount' => ['required','string'],
            'price' => ['required', 'string'],
            'note' => ['required', 'string', 'max:255'],
        ]);

        $user = User::findOrFail($request->input('userID'));

        $fullName = trim("{$user->firstName} {$user->middleName} {$user->lastName} {$user->suffix}");

        distRequests::create([
            'userID' => $user->UserID,
            'fullName' => $fullName,
            'product' => $request->input('product'),
            'amount' => $request->input('amount'),
            'price' => $request->input('price'),
            'note' => $request->input('note'),
            'mobile' => $user->mobile,
            'email' => $user->email,
            'address' => $user->address,
            'status' => 1,
        ]);
    }

    public function delete()
    {

    }
}
