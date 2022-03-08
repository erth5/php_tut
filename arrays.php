<?php

class Post{
    public $title;
    public $published;
    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('My first Post', true),
    new Post('My second Post', false)
];
echo 'var_dump $posts';
var_dump($posts);
echo "";

// Use this function, when you will modifie what gets returned (not all input)
// array_filter(callback, arr1)
$modified = array_map(function ($post){
    $post->published = true;
    return $post;
}, $posts);// Second Argument
echo 'var_dump $modified';
var_dump($modified);

// array_filter(array of items, enclosure/callback/Gehege)
$unpublishedPost = array_filter($posts, function ($post){
    // return $post->published === false; // same as
    return ! $post->published;
});

echo 'var_dump $unpublishedPost';
var_dump($unpublishedPost);

// this need that propertie is public
$titles = array_column($posts, 'title');
echo 'var_dump $titles';
var_dump($titles);



// long form
foreach ($posts as $index => $post){
    $posts[$index] = (array) $post;
}echo 'var_dump $posts'; var_dump($posts);

// short form
$posts = array_map(function ($post){
    return (array) $post;
}, $posts);

