<?php

namespace App\Http\Controllers;

use App\Models\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacebookController extends Controller
{
    public function store(Request $request){
        $data =  $request->get('data');
        $group_users = json_decode($data);
        foreach ($group_users as $user_data){
            $user_name = $user_data->name;
            $user_group_link = $user_data->link;
            $user_group_link_data = explode('/', $user_group_link);
            $group_id = $user_group_link_data[2];
            $user_id = $user_group_link_data[4];
            if (Facebook::where('user_id', $user_id)->where('group_id', $group_id)->count('id') == 0){
                Facebook::create([
                    'link' => $user_group_link,
                    'name' => $user_name,
//                'image' => '',
                    'user_id' => $user_id,
                    'group_id'  => $group_id
                ]);
            }

        }

        return 'success';

    }
}
