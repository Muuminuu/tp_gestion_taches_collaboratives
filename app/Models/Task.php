<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable= [
        'title',
        'description',
        'status',
        'user_id', 
        'created_at'
    ];

    // Définir les statuts de tâche
    const STATUS_TODO = 'À faire';
    const STATUS_IN_PROGRESS = 'En cours';
    const STATUS_DONE = 'Terminé';


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
