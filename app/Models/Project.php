<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_progetto', 'slug', 'descrizione_progetto', 'link_github_progetto', 'type_id'
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
