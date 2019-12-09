<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model
{
    protected $fillable = ['name', 'house_number', 'address', 'user_id'];

    protected $table = 'address_book';

    protected $primaryKey = 'id';
}
