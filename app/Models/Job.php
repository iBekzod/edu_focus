<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $category category
@property varchar $picture picture
@property varchar $description description
@property decimal $salary salary
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Job extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'jobs';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'category',
'picture',
'description',
'salary'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}