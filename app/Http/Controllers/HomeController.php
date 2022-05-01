<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        try {
            $data['sliders'] = $this->getSliderNews();
        } catch (\Exception $e) {
            //throw $th;
        }

        return view('home', $data);
    }

    public function getSliderNews()
    {
        $data = [];
        try {
            $data = News::with(['categories','news_keywords','creators'])->limit(2)->orderBy('id', 'DESC')->get();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return $data;
    }
}
