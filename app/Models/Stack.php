<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Stack extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stacks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'technology',
        'experience',
        'type'
    ];

    public function getType(){
        if($this->type == 1){
            return 'sitebuild';
        } elseif($this->type == 2){
            return 'frontend';
        } elseif($this->type == 3){
            return 'backend';
        } elseif($this->type == 4){
            return 'dev';
        } elseif($this->type == 5){
            return 'tool';
        } 
    }
}
