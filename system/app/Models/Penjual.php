<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use App\Models\Traits\Attributes\UserAttributes;
use App\Models\Traits\Relations\UserRelations;

class Penjual extends Authenticatable{

    protected $table = 'penjual';
    use HasFactory, Notifiable;
}