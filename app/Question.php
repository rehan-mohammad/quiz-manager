<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Question extends Model
{

    use SoftDeletes;

    public $table = 'questions';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'quiz_id',
        'active',
        'description',
        'question_options'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'quiz_id' => 'integer',
        'active' => 'boolean',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'quiz_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function quiz()
    {
        return $this->belongsTo('App\Quiz');
    }
}
