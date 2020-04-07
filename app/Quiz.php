<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Quiz extends Model {

    use SoftDeletes;

    public $table = 'quizzes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'slug',
        'title',
        'description',
        'welcome_text',
        'admin_name',
        'active',
        'starts_at',
        'expires_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'slug' => 'string',
        'title' => 'string',
        'description' => 'string',
        'welcome_text' => 'string',
        'admin_name' => 'string',
        'active' => 'boolean',
        'starts_at' => 'date',
        'expires_at' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'slug' => 'required',
        'title' => 'required',
        'admin_name' => 'required',
        'active' => 'required',
        'starts_at' => 'required',
        'expires_at' => 'required'
    ];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function submissions()
    {
        return $this->hasMany('App\Submission');
    }

}
