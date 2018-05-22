<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Shoutout extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shoutouts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['mame', 'content'];
    public static $rules = [
        'mame' => 'required',
        'content' => 'required'
    ];
}