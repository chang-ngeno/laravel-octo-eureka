<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'date_from', 'date_to'];

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['users'];

    /**
     * The users that belong to the role.
     */
    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'role_users',
        )->withTimestamps();
    }
}
