<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car\MechanicModel;
use App\Models\Post\CommentModel;
use App\Models\Post\PostModel;
use App\Models\User\PhoneModel;
use App\Models\User\RoleModel;
use App\Models\User\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getUserInfo(Request $request)
    {
//        $user = UserModel::query()->where('id',$request->id)->get();
        $user = UserModel::find($request->id)->role;
        dd($user->toArray());
    }

    public function role(Request $request)
    {
        $role = RoleModel::query()->where('id', $request->id)->first()->user;
        dd($role->toArray());
    }

    public function getUserInfoByPhone(Request $request)
    {
        $user = PhoneModel::query()->find($request->id)->user;
        dd($user);
    }

    public function post(Request $request)
    {
//        $post = PostModel::query()->where('id',$request->id)->first()->comments;
//        dd($post->toArray());

        $comments = CommentModel::query()->where('id', $request->id)->first()->post;
        dd($comments->toArray());
    }

    public function getMechanicOwners(Request $request)
    {
        $res = MechanicModel::query()->where('id', $request->id)->first()->carOwner;
        dd($res);
    }
}
