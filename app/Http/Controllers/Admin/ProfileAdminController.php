<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileAdminController extends Controller
{
    //
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('admin.profile.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
