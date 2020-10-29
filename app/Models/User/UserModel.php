<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'users';

    /**
     * 关联phone模型
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function phone()
    {
        return $this->hasOne('App\Models\User\PhoneModel', 'user_id', 'id');
    }

    public function role()
    {
        return $this->belongsToMany('App\Models\User\RoleModel', 'user_role', 'user_id','role_id');
    }
}
