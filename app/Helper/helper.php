<?php

function getSelect($tableName){

    switch ($tableName) {
        case 'category':
            $list = \DB::table('categories')->pluck('name', 'id');
            return $list->toArray();
            break;
        default:
            $list = \App\Models\Category::get();
            break;
    }
}

function getPostImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/posts/'.$imageName))){
            return asset('storage/uploads/images/posts/'.$imageName);
        }
    return asset('storage/uploads/images/posts/default_post_image.png');
    }
}