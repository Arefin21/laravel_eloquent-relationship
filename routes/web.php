<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Catagorie;
use App\Models\Mechanic;
use App\Models\Country;



Route::get('/', function () {

//ONE TO ONE RELATIONSHIP

    //$phone=User::find(1);
    //$phone=User::find(1)->phone;
    // $phone=User::find(2)->phone;
    // return $phone;

    // $user=Phone::find(2)->user;
    // return $user;

    // $users=User::all();
    // return $users;

    // return view('welcome',compact('users'));

    //$phones=Phone::all();
    //return $users;

    //ONE TO MANY

     //$comments=Post::find(1)->comments;
    //$comments=Post::all();
    //return $comments;
    //return response()->json($comments);

    //$post=Comment::find(1)->post;
    // $post=Comment::find(5);
    // return $post;

        // $posts=Post::with('comments')->get();
        //return $posts;

    //     $comments=Comment::all();


    // return view('onetoMany',compact('comments'));

    //$posts=Post::with('catagories')->get();
    //$catagories=Catagorie::with('posts')->get();
    //return $posts;
    //return view('manytoMany',compact('posts'));

    //return view('manytoMany',compact('catagories'));


    //Has One Through

    //$mechanics=Mechanic::with('carOwner')->get();
    //return $mechanics;
    //return view('hasOneThrough',compact('mechanics'));

    //Has Many Through

    $countries=Country::with('posts')->get();
    //return $countries;
    return view('hasManyThrough',compact('countries'));

});
