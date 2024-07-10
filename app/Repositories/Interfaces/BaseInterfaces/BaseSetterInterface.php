<?php

namespace App\Repositories\Interfaces\BaseInterfaces;

interface BaseSetterInterface
{

    /**
     * store new resource
     * @param array $data
     * @return mixed
     */
    public function store(array $data);

    /**
     * update an existing resource
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id);
}
