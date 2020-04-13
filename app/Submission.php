<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Submission extends Model {

    use SoftDeletes;

    public $table = 'submissions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'ip_address',
        'quiz_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ip_address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ip_address' => 'required',
        'quiz_id' => 'required',
    ];

    public function answers()
    {
        return $this->hasMany('\App\Answer');
    }

    public function quiz()
    {
        return $this->belongsTo('\App\Quiz');
    }

    public function user()
    {
        return $this->belongsTo('\App\User');
    }

}
