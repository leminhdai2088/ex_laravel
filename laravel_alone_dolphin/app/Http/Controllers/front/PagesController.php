<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request, $room_name){
        switch($room_name){
            case 'bath_room':
            case 'bed_room':
            case 'kitchen_room':
            case 'living_room':
            case 'home_office':
                return view('front.bath_room',['room_name'=>$room_name]);
                break;
            default:
            return view('front.'.$room_name,['room_name'=>$room_name]);         
        }
    }
}
