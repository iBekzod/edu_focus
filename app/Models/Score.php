<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property bigint $student_id student id
@property varchar $scores scores
@property bigint $subject_id subject id
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Score extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'scores';

    /**
    * Mass assignable columns
    */
    protected $fillable=['student_id',
'scores',
'subject_id'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}