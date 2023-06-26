<?php
namespace App\Repositories\Interfaces;
use Jsdecena\Baserepo\BaseRepositoryInterface;
use Illuminate\Support\Collection;

interface RegisterInterface extends BaseRepositoryInterface{
    public function createUser(array $data);
    public function listUser($columns = ['*']);
    public function listInterest();
}
