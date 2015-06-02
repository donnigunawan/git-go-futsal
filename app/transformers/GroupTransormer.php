<?php

use League\Fractal\TransformerAbstract;

class GroupTransformer extends TransformerAbstract
{

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'id'            => (int) $user->id,
            'name'          => $user->name,
            'permissions'         => $user->permissions,
        ];
    }

}

?>