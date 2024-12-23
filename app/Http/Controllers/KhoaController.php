<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhoaController extends Controller
{
    public function index()
    {
        // Truy vấn dữ liệu từ bảng khoa
        $khoas = DB::table('khoa')->get(); // Thay 'DB::select' bằng 'DB::table'
        return view('khoa.index', ['khoas' => $khoas]);
    }

    public function detail($makh)
    {
        // Truy vấn dữ liệu từ bảng khoa theo điều kiện MaKH
        $khoa = DB::table('khoa')->where('MaKH', $makh)->first(); // Sử dụng Query Builder thay vì 'DB::select'
        
        if (!$khoa) {
            return redirect('/khoa')->with('error', 'Khoa không tồn tại!');
        }

        return view('khoa.detail', ['khoa' => $khoa]);
    }

    public function create()
    {
        return view('khoa.create');
    }

    // Xử lý khi form được submit
    // CreateSubmit
    public function createSubmit(Request $request)
    {
       // Xác thực dữ liệu đầu vào
       $request->validate([
        'MaKH' => 'required|unique:khoa,MaKH|max:10',
        'TenKH' => 'required|max:100',
    ]);

    // Chèn dữ liệu vào bảng khoa
    DB::table('khoa')->insert([
        'MaKH' => $request->MaKH,
        'TenKH' => $request->TenKH,
    ]);

    // Chuyển hướng về trang danh sách khoa với thông báo thành công
    return redirect()->route('khoa.index')->with('success', 'Khoa đã được thêm thành công!');
    }
    
}
