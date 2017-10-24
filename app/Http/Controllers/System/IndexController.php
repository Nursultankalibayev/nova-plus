<?php

namespace App\Http\Controllers\System;

use App\Models\Application;
use App\Models\Carousel;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class IndexController extends Controller
{
    public function index()
    {
        $rows['service'] = Post::where('category_id',1)->count();
        $rows['carousel'] = Carousel::count();
        $rows['reasons'] = Post::where( 'category_id',2)->count();
        $rows['faq_site'] = Faq::where('is_site',1)->count();
        $rows['faq_archive'] = Faq::where('is_site',0)->count();
        $rows['review_site'] = Review::where('is_site',1)->count();
        $rows['review_archive'] = Review::where('is_site',0)->count();
        $rows['application_site'] = Application::where('is_archive',0)->count();
        $rows['application_archive'] = Application::where('is_archive',1)->count();
        return view ('system.index',compact('rows'));
    }

    public function getSignOut() {

        Auth::logout();
        return redirect('/');

    }

    public function users()
    {
        $rows['users'] = User::where('role',0)->orderBy('name','asc')->get();
        return view('system.users.index',compact('rows'));
    }

    public function deleteFromUser($id)
    {
        $user = User::find($id);
        $user->delete();
        $result['result'] = 1;
        return $result;
    }
}
