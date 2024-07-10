<?php

namespace App\Http\Controllers;

use App\Models\TopicData;
use App\Models\Topics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopicController extends Controller
{




   function frontEndTopic(){
       return view('index');
   }
   function frontEndTopicData($topic_id){
       $topic = \App\Models\Topics::find(request()->topic_id);
       return view('topic_data', compact('topic'));
   }



   function adminTopic(){
       return view('admin.index');
   }

   function adminTopicData(){
       return view('admin.topic_data');
   }
   function adminTopicStore(Request $request){
       Topics::create(['name' => $request->name]);
       return redirect()->back();
   }

   public function deleteTopic($topic_id){
       Topics::find($topic_id)->delete();
       return redirect()->back();
   }

   function adminTopicDataStore(Request $request){
       $data =  $request->only(['title', 'topic_id', 'link']);
       TopicData::create($data);
       return redirect()->back();
   }

    public function deleteTopicData($topic_data_id){
        TopicData::find($topic_data_id)->delete();
        return redirect()->back();
    }
}
