<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $email email
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Professor extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'professors';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'email'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}