<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Observers\UserObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
 
#[ObservedBy([UserObserver::class])]
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    




// // User Model
// public function role()
// {
//     return $this->belongsTo(Role::class);
// }

// public function getPermissionsForModule($module)
// {
//     $role = $this->role; // Get the user's associated role
//     $rolePermissions = config("roles.{$role->name}.modules.{$module}");

//     return $rolePermissions ?? [];
// }

// /**
// * Check if the user has permission for a specific module action.
// */
// public function hasPermission($module, $action)
// {
//     $permissions = $this->getPermissionsForModule($module);
//     return in_array($action, $permissions);
// }


// <!-- Roles Model and Migrations -->
// public function up()
// {
//     Schema::create('roles', function (Blueprint $table) {
//         $table->id();
//         $table->string('name');
//         $table->timestamps();
//     });
// }

}
