<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\News;
use App\User;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    
 
    public function __construct()
    {
        $this->middleware('auth')->except('profile');
    }


    public function index(News $news)
    {
        $articles = News::where('user_id', Auth::id())->get();
   
        return view('dashboard.articles', [
            'articles' => $articles,
        ]);
    }

    // public function rec_insta_api($insta)
    // {
    //     global $temp_posts;
        
    //     foreach($insta['posts'] as $post):
    //         $temp_posts[] = $post['node']['display_url'];
    //     endforeach;

    //     if($insta['has_next_page'] == true){
    //         $insta = $this::insta_api($insta['end_cursor']);
    //         return $this::rec_insta_api($insta);
    //     }else{
    //         return $temp_posts;
    //     }

    // }


    
    // public function insta_api($end_cursor = '', $post_per_page = 10, $user = '')
    // {
                   
    //     $url2 = 'https://www.instagram.com/gazetaexpress/?__a=1';
    //     $response2 = Http::get($url2)->json();

    //     $responseTest = Http::get($url2);
    //     $responseTest->clientError();
    //     $responseTest->serverError();


    //     $user_id = $response2['graphql']['user']['id'];
    //     $profile_picture = $response2['graphql']['user']['profile_pic_url_hd'];
    //     $url = "https://www.instagram.com/graphql/query/?query_id=17888483320059182&id=". $user_id ."&first=" . $post_per_page . "&after=" . $end_cursor;
    //     $response = Http::get($url)->json();
        
    //     $posts = $response['data']['user']['edge_owner_to_timeline_media']['edges'];
    //     $end_cursor = $response['data']['user']['edge_owner_to_timeline_media']['page_info']['end_cursor'];
    //     $has_next_page = $response['data']['user']['edge_owner_to_timeline_media']['page_info']['has_next_page'];
    //     $total_posts = $response['data']['user']['edge_owner_to_timeline_media']['count'];

    //     return ['posts'=> $posts, 'end_cursor' => $end_cursor, 'has_next_page' => $has_next_page, 'total_posts' => $total_posts, 'profile_picture' => $profile_picture];
    // }

    // public function insta_api_loadmore()
    // {
    //     $user = User::where('id', Auth::id())->first();
    //     return $this->insta_api($_GET['end_cursor'], 12, $user->insta_account);
    // }


    public function create()
    {
        return view('dashboard.add_article');
    }
    
    public function store(Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'image' => ['required', 'unique:news'],
        // ]);

        // $validatorUrl = Validator::make($request->all(), [
        //     'url' => ['required', 'url']
        // ]);

        // if($validator->fails()):
        //     return back()->with([ 
        //         'message' => 'Failed. This article was already added in the feed!', 
        //         'alert-type' => 'error'
        //     ]);
        // endif;
    
        // if($validatorUrl->fails()):
        //     return back()->with([ 
        //         'message' => 'Failed. You didn\'t write your url correctly.', 
        //         'alert-type' => 'error'
        //     ]);
        // endif;
    
            
        $request->validate([
            'image' => ['required', 'file', 'max:2000'],
            'url' => ['required', 'url']
        ]);

        News::create([
            'user_id' => Auth::id(),
            'title' => request('title'),
            'url' => request('url'),
            'image' => request()->file('image')->store('images'),
            'video' => request('video'),
            // 'image' => request('image'),
            // 'taken_at' => request('taken_at'),
            // 'type_name' => request('type_name'),
        ]);

        return back()->with([ 
            'message' => 'Article created successfully.', 
            'alert-type' => 'success'
        ]);
        
    }

    public function edit($id)
    {
        $article = News::findOrFail($id);
        return view('dashboard.edit_article', compact('article' , 'article'));
    }


    public function update($id)
    {   
        $news = News::findOrFail($id);
        $news->user_id = Auth::id();
        $news->title = request('title');
        $news->url = request('url');
        if(request()->file('image')):
            if(Storage::exists($news->image))
                Storage::delete($news->image);
            $news->image = request()->file('image')->store('images');
        endif; 
        $news->video = request('video');
        $news->update();


        return back()->with([ 
            'message' => 'Updated successfully.', 
            'alert-type' => 'success'
        ]);
    }
    
 
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if(Storage::exists($news->image))
            Storage::delete($news->image);

        $news->delete();
        return back()->with([ 
            'message' => 'Deleted successfully.', 
            'alert-type' => 'success'
        ]); 
    }


    public function profile(User $user)
    {  
        $articles = $user->news->where('is_featured', 0);
        $logo = $user->profile->logo;
        $featured = $user->news->where('is_featured', 1)->first();

        return view('profile', [
            'user' => $user,
            'articles' => $articles->sortByDesc('created_at'),
            'logo' => $logo,
            'featured' => $featured
        ]);
    }

    public function featured($id)
    {
        $news = News::findOrFail($id);
        
        if(!($news->where('is_featured', 1)->get()->isEmpty())){
            return redirect('/articles')->with([ 
                'message' => 'There\'s already a featured post', 
                'alert-type' => 'warning'
            ]);
        }

        $news->featuredPost();
        return redirect('/articles')->with([ 
            'message' => 'Featured post added', 
            'alert-type' => 'success'
        ]);
    }

    public function removeFeatured($id)
    {
        $news = News::findOrFail($id);

        $news->removeFeaturedPost();
        return redirect('/articles')->with([ 
            'message' => 'Removed featured post', 
            'alert-type' => 'success'
        ]);

    }



}
