<?php

//use GroupTransformer;

class UserController extends BaseController
{
    public function show()
    {
		//use ControllerTrait;
        $group = Sentry::findGroupByName('admin');

$users = Sentry::findAllUsersInGroup($group);

        return $this->response->collection($users, new GroupTransformer);
    }
}

?>