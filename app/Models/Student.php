<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
   @property varchar $subject_interest subject interest
@property int $score score
@property bigint $status_id status id
@property bigint $progress_id progress id
@property timestamp $created_at created at
@property timestamp $updated_at updated at
   
 */
class Student extends Model 
{
    
    /**
    * Database table name
    */
    protected $table = 'students';

    /**
    * Mass assignable columns
    */
    protected $fillable=['subject_interest',
'score',
'status_id',
'progress_id'];

    /**
    * Date time columns.
    */
    protected $dates=[];




}