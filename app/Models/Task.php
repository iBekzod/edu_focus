<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $category category
@property varchar $job_specification job specification
@property varchar $type type
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Task extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'tasks';

    /**
    * Mass assignable columns
    */
    protected $fillable=['category',
'job_specification',
'type'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}