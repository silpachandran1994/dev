<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class UserRole extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    protected $table = 'role_user';
}