<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class ClientController extends Controller
{

    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        if($validator->fails())
        {
            return response()->json(['status_code' => 400, 'message' => 'Rellene todos los campos']);
        }

        $user = new Client();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->message = $request->message;

        $user->save();
        // event(new Registered($user));

        return response()->json([
            'status_code' => 200,
            'message' => 'Nos pondremos en contacto lo más pronto posible!'
        ]);
    }
}
