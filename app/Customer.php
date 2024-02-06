<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

//Class
class Customer extends Model
{
    protected $fillable = ['name', 'email'];
}
