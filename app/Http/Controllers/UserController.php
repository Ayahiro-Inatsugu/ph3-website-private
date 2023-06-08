<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // 登録されたユーザーを一覧で表示する
    public function index()
    {
        // ユーザーを全件取得
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    // ユーザーのプロフィールを表示する
    public function show($id)
    {
        // ユーザーを1件取得
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }
}
