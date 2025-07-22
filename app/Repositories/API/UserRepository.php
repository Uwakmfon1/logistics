<?php 
namespace App\Repositories\API;
use App\Models\User;


class UserRepository 
{
    public function __construct (public User $model){ }

    public function create(array $data): User
    {
        return $this->model->create($data);
    }

    public function find(int $id): ?User
    {
        return $this->model->find($id);
    }

    public function update(int $id, array $data): bool
    {
        $user = $this->model->find($id);
        return $user ? $user->update($data) : false;
    }

    public function destroy(int $id): ?User
    {
        return $this->model->delete($id);
    }
}