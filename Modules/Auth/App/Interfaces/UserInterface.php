<?php

namespace Modules\Auth\Interfaces;

interface UserInterface
{
    public function index($options);

    public function get($id);

    public function create($data);

    public function update($id, $data);

    public function delete($id);
}
