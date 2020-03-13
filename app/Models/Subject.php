<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $category category
@property varchar $name name
@property varchar $photo photo
@property varchar $ISBN ISBN
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Subject extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'subjects';

    /**
    * Mass assignable columns
    */
    protected $fillable=['category',
'name',
'photo',
'ISBN'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}