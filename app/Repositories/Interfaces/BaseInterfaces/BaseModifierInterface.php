<?php

namespace App\Repositories\Interfaces\BaseInterfaces;

interface BaseModifierInterface
{

    /**
     * active and deactivate resource
     * @param $resourceId
     * @return mixed
     */
    public function activate($resourceId);

    /**
     * delete resource according to resource id
     * @param $resourceId
     * @return mixed
     */
    public function delete($resourceId);
}
