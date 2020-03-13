<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $name name
@property varchar $score score
@property bigint $subject_id subject id
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Progress extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'progress';

    /**
    * Mass assignable columns
    */
    protected $fillable=['name',
'score',
'subject_id'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}