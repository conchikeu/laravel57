<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class NewsController extends Controller
{
	public function list_news(){
        $news = DB::table('news')->get();
		return view('admin.news.list',compact('news'));
	}
    // public function tintuc1(){
    //     $news = DB::table('news')->first();
    //     return view('pages.news',compact('news'));
    // }
    public function add(){
    	return view('admin.news.add');
    }
    public function post_add(Request $request){
        $title = $request->title;
        $content = $request->content;
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->move('public/uploads/images/news/',$name);
        DB::table('news')->insert(['title' => $title, 'content' => $content, 'image' => $name]);
        return redirect()->route('list-news');
    }
    public function get_edit( $id){
    	$new = DB::table('news')->where('id','=',$id)->first();
            return view('admin.news.edit', compact('new'));

    }
    public function edit($id , Request $request){
        $title = $request->title;
        $content = $request->content;
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image->move('public/uploads/images/news/',$name);
        
        // $image = $request->image;
        // $image->move('public/uploads/images/news/', $image->getClientOriginalName());
        
        $date = $request->date;
        DB::table('news')->where('id','=',$id)->update(['title'=>$title, 'content'=> $content, 'image'=> $name]);
        return redirect()->route('list-news');
    }
    public function delete($id){
        $delete =  DB::table('news')->where('id', '=', $id)->delete();
            return redirect()->route('list-news');
    }
}