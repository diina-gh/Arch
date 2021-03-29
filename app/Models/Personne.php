<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    //use HasFactory;

    protected $fillable = array(
        'parent_id',
        'order',
        'nom'
    );
    public static $rules = array(
        'parent_id' => 'bigInteger',
        'order' => 'required',
        'nom' => 'required'
    );
    public function ancestor()
    {
        return $this->belongsTo(Personne::class, 'parent_id');
    }
}
