<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserM extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
       'id','name','email','password','username','level'];

}