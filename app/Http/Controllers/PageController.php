<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Auth;
class PageController extends Controller
{
    function index()
    {
    	$posts = Post::with('user')->with('category')->paginate(5);
    	return view('page.index',['posts' => $posts]);
    }
    function singlePost($id)
    {
    	$post = Post::find($id);
    	return view('page.single',['post'=>$post]);
    }
    function PostCategory($id)
    {
    	$categories = Category::all();
    	$category = Category::find($id);
    	return view('page.category',compact('categories','category'));
    }
    function profile()
    {
        $profile = User::find(Auth::id());
        return view('page.profile',['profile'=>$profile]);
    }
    function profileUpdate(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->back()->with(['success'=>'Update thành công']);
    }
}
