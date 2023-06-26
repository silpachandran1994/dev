<?php

namespace App\Repositories;

use App\Repositories\Interfaces\RegisterInterface;
use Jsdecena\Baserepo\BaseRepository;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use App\Models\UserInterest;
use Illuminate\Support\Collection;

class RegisterRepository extends BaseRepository implements RegisterInterface {
    public function __construct(User $user){
        parent::__construct($user);
        $this->model = $user;
        }

    public function createUser(array $data) {
        $result = collect($data)->except('interest')->all();
        $user = new User($result);
        if($user->save()){
            foreach($data['interest'] as $i){
                // dd($user->id);
                $interests = new UserInterest();
                $interests->user_id = $user->id;
                $interests->interest = $i;
                $interests->save();
            }
            $roles = Role::all();
            foreach ($roles as $role) {
                    $user->roles()->attach($role);
                }
             return $user;   
        }
    }
    public function listUser($columns = ['*']){
        return $this->model->get();
    }
    public function listInterest(){
        return UserInterest::all();
        
    }
}