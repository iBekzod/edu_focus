<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $email email
@property varchar $photo photo
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Studentparent extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'studentparents';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'email',
'photo'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}