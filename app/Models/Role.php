<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
