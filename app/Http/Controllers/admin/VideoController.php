<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cours;
use App\Models\Section;
use App\Models\Video;
use AWS\CRT\Log;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public  function index(){
        $data = array();
        $videos = Video::all();
        foreach ($videos as $vid){
            $module = Section::find($vid->module_id);
            $course = Cours::find($module->coure_id);
            $category = Category::find($course->category_id);
            array_push($data ,["cat" => $category->category_name , "course" => $course->cours_name , "module" => $module->title , "video" => $vid->title , "url" => $vid->url]);
        }

        return view('admin.videos.index' , ["data" => $data]);
    }
    public  function create(){
        return view('admin.videos.create');
    }
    public  function stock(Request $request){
        $all = $request->all();
        $url = $request->input("videoUrl");
        $module = $request->input("course_name");
        $vid = $request->input("video_name");
        if ($vid != null && $module != null && $url != null){
            $video = new Video();
            $video->module_id = $module;
            $video->url = $url;
            $video->title = $vid;
            $video->save();
            return response()->json(["msg" => "working"]);
        }else {
            return response()->json(["msg" => "not working"]);
        }

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
