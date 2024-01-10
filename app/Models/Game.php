<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Game extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'games';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'platform',
        'release'
    ];
}
