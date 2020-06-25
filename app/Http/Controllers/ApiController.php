<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class ApiController extends Controller
{

    public function get_insta_data($id) {
        $instagram = new \InstagramScraper\Instagram();
        $getInstagram_account= $instagram->getMediaByCode($id);

       $data= [
            "username"=>$getInstagram_account['owner']['username'],
            "avatar"=>$getInstagram_account['owner']['profilePicUrl'],
            "post_id"=>(string)$id,
            "comment_count"=>(string)$getInstagram_account->getCommentsCount(),
        ];
       $finalResult=json_encode($data,JSON_PRETTY_PRINT);

       return $finalResult;
    }

    public function get_last_post_insta(){
        $instagram = new \InstagramScraper\Instagram();
        $medias = $instagram->getMediasByUserId('24363833624',4);
    
        $images=[];
        foreach ($medias as $item){
            array_push($images,$item->getImageThumbnailUrl());

        }
            $data=json_encode($images,JSON_PRETTY_PRINT);
         
       return $data;
    }

    public function get_last_blog_posts()
    {
        return Post::where("post_type","post")->skip(1)->take(3)->get();
    }
}
