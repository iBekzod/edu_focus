<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $photo photo
@property varchar $role role
@property int $age age
@property varchar $phone_number phone number
@property varchar $address address
@property varchar $city city
@property varchar $state state
@property varchar $country country
@property varchar $postal_code postal code
@property varchar $email email
@property timestamp $email_verified_at email verified at
@property varchar $password password
@property varchar $remember_token remember token
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class User extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'users';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'photo',
'role',
'age',
'phone_number',
'address',
'city',
'state',
'country',
'postal_code',
'email',
'email_verified_at'];

    /**
    * Date time columns.
    */
    protected $dates=['email_verified_at'];




}