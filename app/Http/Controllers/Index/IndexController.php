<?php

namespace App\Http\Controllers\Index;

use App\Models\Application;
use App\Models\Carousel;
use App\Models\Faq;
use App\Models\Review;
use App\Models\TestCategory;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Test;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {
        $rows['carousel'] = Carousel::latest('sorting','asc')
            ->get()
            ->toArray();
        $rows['reviews'] = Review::where('is_site',1)
            ->orderBy('id','desc')
            ->take(3)
            ->get(['id','review','user_id']);
        return view('index.index',compact('rows'));
    }

    public function call()
    {
        return view('index.call');
    }

    public function service()
    {
        $rows['active'] = 'services';
        $rows['services'] = Post::where('category_id',1)->orderBy('sorting','asc')->get()->toArray();
        return view('index.service',compact('rows'));
    }

    public function tests()
    {
        $carousel_id = 12;
        $rows['carousel'] = Carousel::find($carousel_id);
        $rows['active'] = 'tests';
        $rows['test_category'] = TestCategory::orderBy('id','desc')->get()->toArray();
        return view('index.tests',compact('rows'));
    }

    public function keydownSearch(Request $request)
    {
        $input = $request['text'];
        if(strlen($input) >0){
            $rows['test'] = Test::where('title_ru','like','%'.$input.'%')
                ->orWhere('title_kk','like','%'.$input.'%')
                ->orWhere('title_en','like','%'.$input.'%')
                ->get()
                ->toArray();
            return view('index.search_result',compact('rows'));
        }
    }

    public function keydownResult(Request $request)
    {
        $input = $request['id'];
        $rows['test'] = Test::find($input);
        $rows['test_category'] = TestCategory::find($rows['test']['id']);

        return view('index.search_tab',compact('rows'));
    }

    public function searchButton(Request $request)
    {
        $input= $request['text'];
        $query = Test::where('title_ru','like','%'.$input.'%')
            ->orWhere('title_kk','like','%'.$input.'%')
            ->orWhere('title_en','like','%'.$input.'%');
        $pluck = $query->pluck('category_id');
        $rows['test_category'] = TestCategory::whereIn('id',$pluck)->get();
        $rows['test'] = $query->get();
        return view('index.search-button-tab',compact('rows'));
    }

    public function faq()
    {
        $rows['active'] = 'faq';
        $rows['faq'] = Faq::where('is_site',1)
            ->orderBy('id','desc')
            ->select(['query','answer','id'])
            ->get()
            ->toArray();
        return view('index.faq',compact('rows'));
    }

    public function profileQuestionSave(Request $request){
        $input = $request->all();
        $faq = new Faq();
        $faq['user_id'] = Auth::user()->id;
        $faq['email'] = $input['email'];
        $faq['query'] = $input['query'];
        $faq->save();
        $result['success'] = 'Успешно отправлено';
        return $result;
    }

    public function profileArticleSave(Request $request)
    {
        $input = $request->all();
        $review = new Review();
        $review['user_id'] = Auth::user()->id;
        $review['email'] = $input['email'];
        $review['review'] = $input['review'];
        $review->save();
        $result['success'] = 'Успешно отправлено';
        return $result;
    }

    public function reviews()
    {
        $rows['reviews'] = Review::where('is_site',1)
            ->orderBy('id','desc')
            ->get();
        return view('index.reviews',compact('rows'));
    }

    public function reasons()
    {
        $rows['reasons'] = Post::where('category_id',2)
            ->orderBy('sorting','asc')
            ->get()
            ->toArray();
        return view('index.reasons',compact('rows'));
    }

    public function lor()
    {
        $carousel_id = 10;
        $rows['active'] = 'services';
        $rows['carousel'] = Carousel::find($carousel_id);
        $rows['lor_content'] = Post::where('category_id',3)
            ->orderBy('sorting','asc')
            ->get();
        return view('index.lor',compact('rows'));
    }

    public function nevrolog()
    {
        $carousel_id = 11;
        $rows['carousel'] = Carousel::find($carousel_id);
        $rows['active'] = 'services';
        return view('index.nevrolog',compact('rows'));
    }

    public function sendCallApplication(Request $request)
    {
//        dd($request->all());
        $this->validate($request,[
           'name'=>'required',
           'address'=>'required',
           'time'=>'required',
           'text_type'=>'required',
        ]);

        $input = $request->all();
        $create = Application::create($input);

        if ($create){
            $mess = "**Заявка**\r\nИмя: ".$input['name']."\r\nАдрес : ".$input['address']."\r\nВремя : ".$input['time']."\r\nКомментарий : ".$input['comment']."\r\nТип заказа : ".$input['text_type'];
            file_get_contents("https://api.telegram.org/bot436396158:AAFdFvalB_gaM1jnXEZrOu5G7YkmAylN36A/sendMessage?chat_id=-225847344&text=".urlencode($mess), false);
        }
        Session::flash('result','Ваш заказ успешно отправлен!');
        return redirect('/');
    }

    public function getPayment()
    {
        return view('index.payment');
    }
}
