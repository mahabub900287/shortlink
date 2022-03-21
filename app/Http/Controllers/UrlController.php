<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Nette\Utils\Random;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rules\Unique;

class UrlController extends Controller
{
    public function index()
    {
        $datas=Url::all();
        return view('url.index',compact('datas'));
    }
    public function create(){
        return view('url.create');
    }

    public function store(Request $request){
        $this->validate($request,[
           "link"=>'required|unique:urls,link',
        ]);
        $data=Url::insert([
          'link'=>$request->link,
          'code'=>('localhost:8000/').Str::random(6),
          'created_at'=>Carbon::now(),
        ]);
        return redirect(route('url.index'))
          ->with('success', 'Link Generated Successfully!');
    }
    public function show($id){
      $link=Url::find($id);
      return view('url.show',compact('link'));
    }

    public function destroy($id)
    {
        //     $destation=public_path('storage/banner/').$banner->photo;
        //     if(File::exists($destation)){
        //         File::delete($destation);
        // }
        Url::find($id)->delete();
        return back()->with('delete', 'Link Delete Successfully!');;
    }
}
