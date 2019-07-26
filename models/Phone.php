<?php namespace Amorphine\Relationissue\Models;

use Model;

/**
 * Phone Model
 */
class Phone extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'amorphine_relationissue_phones';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['number'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'users' => User::class
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
