<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Dashboard extends Model
    {
        use HasFactory;
        protected $table = "users";
        public $primaryKey = "id";
        protected $fillable = [
            'name',
            'email',
            'email_verified_at',
            'password',
            'remember_token',
            'role'
        ];
}
