<?php

namespace App\Http\Controllers\landing_page;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use App\Models\Carriere;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function indexLanding(){
        $local = app()->getLocale();
        $actualites = Actualite::select('id','photo','title_'.$local,'contenu_'.$local,'created_at')->limit(3)->latest()->get();

        return view('landing_page.welcome',compact('actualites'));
    }
    public function getSingleActualite($id){
        $local = app()->getLocale();
        $actualite = Actualite::select('id','photo','title_'.$local,'contenu_'.$local,'tags_'.$local,'created_at')->where('id',$id)->first();
        $all_latest_actualites = Actualite::select('id','photo','title_'.$local,'contenu_'.$local,'created_at')->where('id','!=',$id)->limit(4)->latest()->get();




        return view('landing_page.single_actualite',compact(['actualite','all_latest_actualites']));
    }
    public function Allcarriere() {
        $local = app()->getLocale();
        $carrieres = Carriere::select('id','photo','title_'.$local,'content_'.$local,'date_creation','email','tele','attachement','short_description_'.$local,'lieu_'.$local,'created_at')->latest()->get();

        return view('landing_page.carriere',compact('carrieres'));
    }
    public function singleCarriere($id){
        $local = app()->getLocale();
        $carriere = Carriere::select('id','photo','title_'.$local,'content_'.$local,'date_creation','email','tele','attachement','short_description_'.$local,'lieu_'.$local,'created_at')->where('id',$id)->first();
        $carriere_autre = Carriere::select('id','photo','title_'.$local,'content_'.$local,'date_creation','email','tele','attachement','short_description_'.$local,'lieu_'.$local,'created_at')->where('id','!=',$id)->get();


        return view('landing_page.single_carriere',compact(['carriere','carriere_autre']));
    }

    public function Allactualite(){
         $local = app()->getLocale();
        $actualites = Actualite::select('id','photo','title_'.$local,'contenu_'.$local,'created_at')->latest()->paginate(5);

       return view('landing_page.actualite',compact('actualites'));
    }
}
