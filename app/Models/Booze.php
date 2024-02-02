<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Booze extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'booze';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category',
        'brand',
        'name',
        'size'
    ];

    public function getImage(){
        $img = '/img/booze/booze_'.$this->id.'.jpg';

        return $img;
    }
}
