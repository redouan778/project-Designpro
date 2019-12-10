<?php

namespace App;

use Faker\Provider\Address;
use Illuminate\Database\Eloquent\Model;

class AddressBook extends Model
{
    protected $fillable = ['name', 'house_number', 'address', 'user_id'];

    protected $table = 'address_book';

    protected $primaryKey = 'id';

    public static function checkDuplicatieErorr($statusData){

        $count = AddressBook::where($statusData)->count();

        dd($count);

        if ($count > 0)
            return false;
        else
            return true;
    }
}
