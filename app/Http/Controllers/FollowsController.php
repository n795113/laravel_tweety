<?php

namespace App\Http\Controllers;

use App\Models\User as User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
    	auth()->user()->toggle($user);
    	return back();
    }
}
