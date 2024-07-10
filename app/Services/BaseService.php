<?php

namespace App\Services;

use App\Repositories\Interfaces\BaseInterfaces\BaseFetchInterface;
use App\Repositories\Interfaces\BaseInterfaces\BaseModifierInterface;
use App\Repositories\Interfaces\BaseInterfaces\BaseSetterInterface;

class BaseService
{

    protected $fetchData;
    protected $setData;
    protected $modifyData;

    public function __construct(BaseFetchInterface $fetchData,
                                BaseSetterInterface $setData,
                                BaseModifierInterface $modifyData)
    {
        $this->fetchData = $fetchData;
        $this->setData = $setData;
        $this->modifyData = $modifyData;
    }

    public function listOfResource($data)
    {

    }

    public function detailResource($resourceId)
    {

    }

    public function createResource($data)
    {
//        return $this->setData->store($data);
        return 'here';
    }

    public function updateResource($data, $resourceId)
    {

    }

    public function deleteResource($resourceId)
    {

    }

    public function activateResource($resourceId)
    {

    }
}
