<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cours;
use App\Models\Section;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function index(){
        $coures = Cours::with('category')->get();

        $categories = Category::all();
        return view('admin.cours.index',compact(['categories','coures']));
    }
    public function create(){

        return view('admin.cours.create');
    }
    public function category(){
        $categories = Category::all();

        return view('admin.cours.category_index',compact('categories'));
    }
    public function categoryCreate(){
        return view('admin.cours.category_create');
    }
    public function categoryCours(){
        return view('admin.cours.cours_category');
    }
    public function Modelindex(){
        $coures = Cours::all();
        $models = Section::with('coure')->get();

        return view('admin.cours.index_models',compact(['coures','models']));
    }
    public function Modelstore(Request $request){
        $request->validate([
            'model_name' => 'required|string',
            'coure_id' => 'required|exists:coures,id',
        ]);

        $model = Section::create([
            'title' => $request->model_name,
            'coure_id'   => $request->coure_id,
        ]);

        return redirect()->route('models.index')->with(['success' => 'Le Model est créé' ]);
    }
    public function store(Request $request){


        $request->validate([

            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cours_name' => 'required|string',
            'category_id' => 'required|exists:categories,id',


        ]);

        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/cours'), $imageName);
        }

        $cours = Cours::create([
           'cours_name' => $request->cours_name,
           'description' => $request->description,
           'photo' => $imageName,
           'status' => $request->status,
           'category_id' => $request->category_id,

        ]);



        return redirect()->route('cours.index')->with([ 'success' => 'Le cours est créé' ]);
    }
    public function categoryStore(Request $request){

        $request->validate([

            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_name' => 'required|string',

        ]);


        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/categories'), $imageName);
        }


        $categories = Category::create([
           'category_name' => $request->category_name,
           'description' => $request->description,
           'photo' => $imageName,
           'sous_category' => $request->sous_category,
        ]);

        return redirect()->route('category.index')->with(['success' => 'Le Cours Est Créé']);


    }
}
