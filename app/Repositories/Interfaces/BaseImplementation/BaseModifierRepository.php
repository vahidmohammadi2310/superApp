<?php

namespace App\Repositories\Interfaces\BaseImplementation;

use App\Repositories\Interfaces\BaseInterfaces\BaseModifierInterface;

class BaseModifierRepository implements BaseModifierInterface
{

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * active or deactivate resource
     * @param $resourceId
     * @return mixed
     */
    public function activate($resourceId)
    {
        $resource = $this->model->findOrFail($resourceId);
        $resource->is_active = $resource->is_active == 1 ? 0 : 1;
        $resource->save();
        return $resource;
    }

    /**
     * delete resource by resource id
     * @param $resourceId
     * @return void
     */
   public function delete($resourceId)
   {
       $this->model->findOrFail($resourceId)->delete();
   }
}
