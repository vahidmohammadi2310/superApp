<?php

namespace App\Repositories\Interfaces\BaseInterfaces;

interface BaseFetchInterface
{
    /**
     * list of resources
     * @param array $select
     * @return mixed
     */
    public function index(array $select);

    /**
     * find details op resource according to resource id
     * @param $resourceId
     * @param array $select
     * @return mixed
     */
    public function show($resourceId, array $select);
}
