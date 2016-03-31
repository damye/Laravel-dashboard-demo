<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    /**
     * @desc 获取当前所有用户
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function selectAll()
    {
        return User::all();
    }
}
