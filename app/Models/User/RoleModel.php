<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;

    protected $table = 'role';

    public function User()
    {
        return $this->belongsToMany('App\Models\User\UserModel', 'user_role', 'role_id', 'user_id')
            ->using('App\Models\User\UserRoleModel')
            ->withPivot(['created_at'])
            ->wherePivotIn('user_id', [3])
            ;
    }
}
