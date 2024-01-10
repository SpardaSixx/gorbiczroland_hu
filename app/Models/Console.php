<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Console extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'consoles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company',
        'name',
        'type'
    ];
}
