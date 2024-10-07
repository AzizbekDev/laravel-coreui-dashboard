<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'description'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
