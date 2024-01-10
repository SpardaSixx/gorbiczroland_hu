<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Music extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'music';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'format',
        'author',
        'album',
        'year'
    ];
}
