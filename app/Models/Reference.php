<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Reference extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'references';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'url',
        'type',
        'year'
    ];
}
