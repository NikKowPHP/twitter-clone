<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    //
    public function store(Request $request)
    {
        $followed_user_id = Auth::user()->id;
        $following_user_id = $request->route('user');

        $formFields = [
            'following_user_id' => $following_user_id,
            'followed_user_id' => $followed_user_id
        ];
        if(Follow::create($formFields)) {
            return redirect()->back();
        }

    }
    public function destroy(Follow $follow)
    {
        $follow->delete();
        return redirect()->back();

    }

}
