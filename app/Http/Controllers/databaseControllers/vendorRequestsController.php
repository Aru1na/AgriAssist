<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vendorRequests;
use App\Models\User;


class vendorRequestsController extends Controller
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

        vendorRequests::create([
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
