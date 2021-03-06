<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (){
//    $post=new Post();
//    $post->title ='test title';
//    $post->content='test content';
//    $post->save();

//    Post::create([
//        'title'=>'test title2',
//        'content'=>'test content2'
//    ]);

//    $post=\App\Models\Post::all();
//    dd($post);

//    $post=Post::find(1);
//    dd($post);

//    $posts=Post::where('id', '<', "10")->orderBy('id','DESC')->get();
//    dd($posts);

//    $post= Post::find(1);
//    $post->update([
//        'title'=>'updated title',
//        'content'=>'updated content'
//    ]);

//    $post= Post::find(1);
//    $post->title = 'saved title';
//    $post->content = 'saved content';
//    $post->save();

//    $post=Post::find(1);
//    $post->delete();

//    Post::destroy(2);

//    Post::destroy(3, 5, 7);

//    $allPosts=Post::all();
//    dd($allPosts);

//    $featurePosts=Post::where('is_feature',1)->get();
//    dd($featurePosts);

//    $fourthPost=Post::find(4);
//    dd($fourthPost);

//    $lastPost=Post::orderBy('id', 'DESC')->first();
//    dd($lastPost);

//    $post=Post::find(1);
//    echo $post->title.'<br><hr>';
//    foreach ($post->comments as $comment){
//        echo $comment->content.'<br>';
//    }

$comment = Comment::find(1);
echo $comment->post;
$post = $comment->post;
echo $post->id."<br>";
echo $post->title."<br>";
echo $post->comment."<br>";

});

Route::get('posts', [Controllers\IndexController::class, 'index'])->name('posts.index');

Route::get('post', [Controllers\PostController::class, 'index'])->name('posts.post');

Route::get('contact', [Controllers\ContactController::class, 'index'])->name('posts.contact');

Route::get('about', [Controllers\AboutController::class, 'index'])->name('posts.about');


