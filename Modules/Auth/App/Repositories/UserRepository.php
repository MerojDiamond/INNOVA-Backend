<?php

namespace Modules\Auth\Repositories;

use App\Models\User;
use Modules\Auth\Interfaces\UserInterface;

class UserRepository implements UserInterface
{

    public function index($options)
    {
        $perPage = $options["perPage"] ?? 0;
        $users = User::query();
        if ($perPage < 0) {
            $users = ["data" => $users->get()];
        } else {
            $users = $users->paginate($perPage);
        }

        return response()->json($users);
    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function create($data)
    {
        // TODO: Implement create() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
