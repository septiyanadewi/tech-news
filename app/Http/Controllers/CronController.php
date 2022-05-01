<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\NewsCountry;
use App\Models\NewsCreator;
use App\Models\NewsKeyword;


class CronController extends Controller
{
    public function getDataFromApi(Request $request)
    {
        $data = [
            'status' => false,
            'message' => null,
            'count' => 0
        ];
        try {
            if (isset($request->status) && $request->status == 'success') {
                $data_results = $request->results;
                if ($data_results && count($data_results) > 0) {
                    foreach ($data_results as $key => $result) {
                        $set_news_data = $this->setNewsDataFromApi($result);
                        if ($set_news_data->getData()->status) {
                            $data['count']++;
                        }
                    }
                }
            }
            
            $data['status'] = true;

        } catch (Exception $e) {
            $error_message = $e->getMessage().' Line:'.$e->getLine();
            Log::error('error_get_data', [
                'message' => $error_message
            ]);
        }
        
        return response()->json($data);
    }

    public function setNewsDataFromApi($json)
    {
        $data = [
            'status' => false,
            'message' => null
        ];

        try {
            if ($json != null) {
                //check if duplicate data;
                $check_data = News::where('title', $json['title'])->first();
                if (empty($check_data)) {
                    $news = new News;
                    $news->title = $json['title'];
                    $news->link = $json['link'];
                    $news->keywords = json_encode($json['keywords']);
                    $news->creator = json_encode($json['creator']);
                    $news->video_url = $json['video_url'];
                    $news->description = $json['description'];
                    $news->content = $json['content'];
                    $news->published_date = $json['pubDate'];
                    $news->image_url = $json['image_url'];
                    $news->source_id = $json['source_id'];
                    $news->country = json_encode($json['country']);
                    $news->category = json_encode($json['category']);
                    $news->language = $json['language'];
                    $news->save();
                    $data['status'] = true;

                    //save relation
                    $this->saveNewsCategory($news->id, $json['category']);
                    $this->saveNewsCreator($news->id, $json['creator']);
                    $this->saveNewsCountry($news->id, $json['country']);
                    $this->saveNewsKeyword($news->id, $json['keywords']);

                }
            }
        } catch (\Exception $e) {
            $error_message = $e->getMessage().' Line:'.$e->getLine();
            Log::error('error_get_data', [
                'message' => $error_message
            ]);
            $data['message'] = $error_message;
        }

        return response()->json($data);

    }

    public function saveNewsCategory($news_id, $categories)
    {
        try {
            if ($categories != null) {
                if (count($categories) > 0) {
                    foreach ($categories as $key => $category) {
                        //check duplicate
                        $check_data = NewsCategory::where('category', $category)->first();
                        if (empty($check_data)) {
                            $news_category = new NewsCategory;
                            $news_category->news_id = $news_id;
                            $news_category->category = $category;
                            $news_category->save();
                        }
                    }
                }
            }
        } catch (\Exception $th) {
            echo $e->getMessage();
        }
    }

    public function saveNewsCountry($news_id, $countries)
    {
        try {
            if ($countries != null) {
                if (count($countries) > 0) {
                    foreach ($countries as $key => $country) {
                        //check duplicate
                        $check_data = NewsCountry::where('country', $country)->first();
                        if (empty($check_data)) {
                            $news_country = new NewsCountry;
                            $news_country->news_id = $news_id;
                            $news_country->country = $country;
                            $news_country->save();
                        }
                    }
                }
            }
        } catch (\Exception $th) {
            echo $e->getMessage();
        }
    }

    public function saveNewsKeyword($news_id, $keywords)
    {
        try {
            if ($keywords != null) {
                if (count($keywords) > 0) {
                    foreach ($keywords as $key => $keyword) {
                        //check duplicate
                        $check_data = NewsKeyword::where('keyword', $keyword)->first();
                        if (empty($check_data)) {
                            $news_keyword = new NewsKeyword;
                            $news_keyword->news_id = $news_id;
                            $news_keyword->keyword = $keyword;
                            $news_keyword->save();
                        }
                    }
                }
            }
        } catch (\Exception $th) {
            echo $e->getMessage();
        }
    }

    public function saveNewsCreator($news_id, $creators)
    {
        try {
            if ($creators != null) {
                if (count($creators) > 0) {
                    foreach ($creators as $key => $creator) {
                        //check duplicate
                        $check_data = NewsCreator::where('creator', $creator)->first();
                        if (empty($check_data)) {
                            $news_creator = new NewsCreator;
                            $news_creator->news_id = $news_id;
                            $news_creator->creator = $creator;
                            $news_creator->save();
                        }
                    }
                }
            }
        } catch (\Exception $th) {
            echo $e->getMessage();
        }
    }
}
