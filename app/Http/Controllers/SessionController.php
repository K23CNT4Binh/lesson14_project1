<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //#Đọc dữ liệu từ session
    public function getSessionData(Request $request)
    {
        if($request->session()->has('name'))
        {
            echo $request->session()->get('name');
        }
        else
        {
            echo "<h2> Không có dữ liệu trong session </h2>";
        }
    }
    #Lưu dữ liệu vào session
    public function storeSessionData(Request $request)
    {
        $request->session()->put('name','Devmaster Academy');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";
    }
    #Xóa dữ liệu trong session
    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    }

    public function create(Request $request)
    {
        $name = $request->input('name');
        return view('ttb-create');
       
    }
    
}
