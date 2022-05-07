<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Concours;
use Illuminate\Http\Request;

class ConcourIdeeController extends Controller
{
    public function index(){
        return view("admin.concours.index");
    }

    public function create(){
        return view("admin.concours.create");
    }
    public function store(Request $request){

        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/concours'), $imageName);
        }

        if ($request->has('attachement')){
            $fileName = time().'.'.$request->attachement->extension();

            $request->attachement->move(public_path('images/concours/attachment'), $fileName);
        }

        if ($request->has('contenu_ar')){

            $contenu_ar = $request->input('contenu_ar');

            $dom_ar = new \DOMDocument();
            $dom_ar->loadHTML('<?xml encoding="utf-8" ?>' . $contenu_ar);


            $images_ar = $dom_ar->getElementsByTagName('img');

            foreach($images_ar as $ar => $img_ar){
                $data_ar = $img_ar->getAttribute('src');

                list($type, $data_ar) = explode(';', $data_ar);
                list(, $data_ar)      = explode(',', $data_ar);
                $data_ar = base64_decode($data_ar);
                $image_name_ar= "/images/concours/contenu_ar/" . time().$ar.'.png';
                $path = public_path() . $image_name_ar;
                file_put_contents($path, $data_ar);

                $img_ar->removeAttribute('src');
                $img_ar->setAttribute('src', $image_name_ar);
            }

            $contenu_ar = $dom_ar->saveHTML();


        }

        if ($request->has('contenu_fr')){

            $contenu_fr = $request->input('contenu_fr');

            $dom_fr = new \DOMDocument();
            $dom_fr->loadHTML('<?xml encoding="utf-8" ?>' . $contenu_fr);

            $images_fr = $dom_fr->getElementsByTagName('img');

            foreach($images_fr as $fr => $img_fr){
                $data_fr = $img_fr->getAttribute('src');
                list($type, $data_fr) = explode(';', $data_fr);
                list(, $data_fr)      = explode(',', $data_fr);
                $data_fr = base64_decode($data_fr);
                $image_name= "/images/concours/contenu_fr/" . time().$fr.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data_fr);

                $img_fr->removeAttribute('src');
                $img_fr->setAttribute('src', $image_name);
            }

            $contenu_fr = $dom_fr->saveHTML();
        }

        $concours = Concours::create([
            'title_fr' => $request->title_fr,
            'title_ar' => $request->title_ar,
            'short_description_fr' => $request->short_description_fr,
            'short_description_ar' => $request->short_description_fr,
            'contenu_fr' => $contenu_fr,
            'contenu_ar' => $contenu_ar,
            'date_creation' => $request->date_creation,
            'email' => $request->email,
            'photo' => $imageName,
            'tele' => $request->tele,
            'attachement' => $fileName,
            'lieu_fr' => $request->lieu_fr,
            'lieu_ar' => $request->lieu_ar,
        ]);

        return 'created with successfully !!';




    }
}
