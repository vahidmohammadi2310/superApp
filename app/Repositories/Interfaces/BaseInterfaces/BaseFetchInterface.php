<?php

namespace App\Repositories\Interfaces\BaseInterfaces;

interface BaseFetchInterface
{
    /**
     * list of resources
     * @return mixed
     */
    public function index();

    /**
     * find details op resource according to resource id
     * @param $resourceId
     * @return mixed
     */
    public function show($resourceId);
}
