<?php

namespace App\Repositories\Interfaces\BaseImplementation;

use App\Repositories\Interfaces\BaseInterfaces\BaseFetchInterface;

class BaseFetchRepository implements BaseFetchInterface
{

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * list of all resources
     * @param array $select
     * @return mixed
     */
    public function index(array $select)
    {
        return $this->model->select($select)->get();
    }

    /**
     * find resource by resourceId
     * @param $resourceId
     * @param array $select
     * @return mixed
     */
    public function show($resourceId, array $select)
    {
        return $this->model->select($select)->find($resourceId);
    }
}
