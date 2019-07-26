<?php namespace Amorphine\Relationissue\Models;

use Model;

/**
 * GuestBook Model
 */
class Review extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'amorphine_relationissue_reviews';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'user' => User::class
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
