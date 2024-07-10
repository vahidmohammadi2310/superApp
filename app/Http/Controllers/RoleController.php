<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Services\BaseService;
use Illuminate\Http\Response;


class RoleController extends Controller
{

    protected $baseService;


    public function __construct(BaseService $baseService)
    {
        $this->baseService = $baseService;
    }


    public function createRole(StoreRoleRequest $request)
    {
//        $newRole = $this->baseService->createResource($request->all());
        return response('i',Response::HTTP_CREATED);
    }
}
