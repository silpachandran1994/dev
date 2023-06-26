<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class UserInterest extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    protected $table = 'user_interests';
}