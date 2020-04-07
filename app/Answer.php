<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Answer extends Model
{

    use SoftDeletes;

    public $table = 'answers';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'answer',
        'question_id',
        'quiz_id',
        'submission_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'answer' => 'string',
        'question_id' => 'integer',
        'quiz_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'answer' => 'required',
        'question_id' => 'required',
        'quiz_id' => 'required',
        'submission_id' => 'required'
    ];

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }

    public function submission()
    {
        return $this->belongsTo('App\Submission');
    }

}
