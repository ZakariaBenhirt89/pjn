<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public  function index(){
        return view('admin.videos.index');
    }
    public  function create(){
        return view('admin.videos.create');
    }
    public function store(Request $request){
        if ($request->hasFile("video")){
            \Illuminate\Support\Facades\Log::info("filepond");
            $file = $request->file('video');
            $fileName = (string) Str::uuid();
            $folder = config('filesystems.disks.do.folder');
            $path = $file->store("{$fileName}" , 'do' );
            \Illuminate\Support\Facades\Log::info("the path is".$path);
            return response()->json(['msg' => 'done' , "path" => $path], 200);
        }
    }
}
