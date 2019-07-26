<?php namespace Amorphine\Relationissue\Models;

use Model;

/**
 * User Model
 */
class User extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'amorphine_relationissue_users';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name', 'phone'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'reviews' => Review::class
    ];
    public $belongsTo = [
        'phone' => Phone::class
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getPhoneWithNameAttribute() {
        return ($this->phone ? $this->phone->number : 'no_phone') . ' - ' . $this->name;
    }
}
