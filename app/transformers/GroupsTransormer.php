<?php

use League\Fractal\TransformerAbstract;

class GroupsTransformer extends TransformerAbstract
{
    public function transform(Post $post) {
        return [
            'id' => $post->id
            // ...
        ];
    }
}

?>