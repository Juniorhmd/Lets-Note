<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $fillable = [
        'note',
        'created_at'
    ];

    protected $hidden = [
        'updated_at'
    ];

    public function setNoteAttribute($value)
    {
        $value = trim($value);
        $value = mb_strtolower($value);
        $value = ucfirst($value);

        $this->attributes['note'] = $value;
    }

}
