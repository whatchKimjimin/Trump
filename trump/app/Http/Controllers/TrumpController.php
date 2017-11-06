<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrumpFeel as TrumpFeelModel;
use GuzzleHttp\Client;
use Sunra\PhpSimple\HtmlDomParser;


class TrumpController extends Controller
{
    public function index(Request $request){

        $feelData = TrumpFeelModel::orderBy('id','desc')->first();

        $feel = null;
        if($feelData->sentiment >= 66){
            $feel = "pos";
        } else if($feelData ->sentiment >= 33){
            $feel = "neu";
        } else {
            $feel = "neg";
        }

        $feelText = array('pos' => '최고' , 'neu' => '쏘쏘' , 'neg' => '별루');

        return view('Trump/index',['Feel' => $feel , 'BarWidth' => 100 - $feelData->sentiment , 'FeelText' => $feelText[$feel]]);
    }

    public function gallary(Request $request){

        return view('Trump/index2');
    }

    public function keyWord(Request $req) {
        $feelDatas = TrumpFeelModel::where('sentiment' , '<=' , 33)->get();
        $keywords = [];

        foreach($feelDatas as $feelData){
            $feelData->keyphrases = str_replace(array('[',']'),'',$feelData->keyphrases);
            $keywords[] = explode(',',$feelData->keyphrases);
        }

        return view('Trump/index5',['keywords' => $keywords]);
    }

    public function usTweet(Request $request){
        return view('Trump/index3');
    }

    public function feelGraph(Request $request){



        return view('Trump/index4');
    }

    public function test(){
        return view('test/test');
    }

    public function getGraphData(Request $request){
        $feelDatas = TrumpFeelModel::orderBy('id','desc')->limit(7)->get();


        return response()->json($feelDatas);
    }


}
