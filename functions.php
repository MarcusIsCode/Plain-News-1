<?php

declare(strict_types=1);

// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

function getAuthorName(array $authors, array $post) : string  
{
    $postId = $post['authorId'];

    foreach ($authors as $author) {
        $id = $author['id'];
        $name = $author['name'];
        if ($postId === $id) {
            return $name;
        }
    }
}