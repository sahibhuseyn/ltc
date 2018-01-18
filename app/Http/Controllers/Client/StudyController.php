<?php

namespace App\Http\Controllers\Client;

use App\Study;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudyController extends Controller
{
    public function studyList(){
        $language = session('language');
        $studies = Study::getStudies($language);

        return view('client.study.posts', compact('studies'));
    }

    public function studySingle($slug){
        $study = Study::getStudyBySlug($slug);
        $language = session('language');

        $studies = Study::getStudiesDesc($language);

        if(!$study){
            return back();
        }

        return view('client.study.single', compact('study'));
    }

    public function studyType($type_id){

        $language = session('language');
        $studies = Study::getStudyByTypeId($type_id, $language);

        return view('client.study.posts', compact('studies'));
    }
}
