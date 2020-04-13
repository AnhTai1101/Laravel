<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
    protected $table = 'users';
    // Lọc ra các trường cần lấy
    protected $visible = [
        'email','name'
    ];
    // lấy toàn bộ các User
    public function getAllListUser(){
        return $this->all();
    }
}
