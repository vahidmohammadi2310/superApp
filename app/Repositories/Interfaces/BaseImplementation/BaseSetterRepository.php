<?php

namespace App\Repositories\Interfaces\BaseImplementation;

use App\Repositories\Interfaces\BaseInterfaces\BaseSetterInterface;

class BaseSetterRepository implements BaseSetterInterface
{

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * store new resource
     * @param array $data
     * @return mixed
     */
    public function store(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * update an existing resource by id
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id)
    {
        $resource = $this->model->findOrFail($id);
        $resource->update($data);
        return $resource;
    }
}
