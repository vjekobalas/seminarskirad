<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];


    protected static function boot()
    {
        parent::boot();

       /*
        checks if the role has any associated users. If there are any users 
        associated with the role, the is_deletable attribute of the role is 
        set to false and the function returns false, preventing the role 
        from being deleted. If there are no users associated with the role, 
        the function does nothing and the role can be deleted.
       */
        static::deleting(function ($role) {
            if ($role->users()->exists()) {
                $role->is_deletable = false;
                return false;
            }
        });
    }

    
    //  The users that belong to the role.
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
