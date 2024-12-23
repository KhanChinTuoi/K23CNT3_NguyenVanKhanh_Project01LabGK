<?php

namespace App\Http\Controllers;

use App\Models\Nvk_Loai_san_pham;
use Illuminate\Http\Request;

class NVKLOAISANPHAMController extends Controller
{
    // admi: CRUD

    // list
    public function nvkList()
    {
        $nvkLoaiSanPhams = Nvk_Loai_san_pham::all();
        
        return view('nvkAdmins.nvkLoaiSanPham.nvk-list',['nvkLoaiSanPhams'=>$nvkLoaiSanPhams]);
    }

    // create
    public function nvkCreate()
    {
        return view('nvkAdmins.nvkLoaiSanPham.nvk-create');
    }

    public function nvkCreateSubmit(Request $request)
    {
        // ghi dữ liệu xuống DB
        $nvkLoaiSanPham = new Nvk_Loai_san_pham;
        $nvkLoaiSanPham->nvkMaLoai = $request->nvkMaLoai;
        $nvkLoaiSanPham->nvkTenLoai = $request->nvkTenLoai;
        $nvkLoaiSanPham->nvkTrangThai = $request->nvkTrangThai;

        $nvkLoaiSanPham->save();

        return redirect()->route('nvkadmins.nvkloaisanpham');
    }

    // edit 
    public function nvkEdit($id)
    {
        $nvkLoaiSanPham = Nvk_Loai_san_pham::find($id);
        return view('nvkAdmins.nvkLoaiSanPham.nvk-edit',['nvkLoaiSanPham'=>$nvkLoaiSanPham]);
    }

    // Post: nvkEditSubmit
    public function nvkEditSubmit(Request $request)
    {
        // ghi de du lieu xuong db
        $nvkLoaiSanPham = Nvk_Loai_san_pham::find($request->id);
        $nvkLoaiSanPham->nvkMaLoai = $request->nvkMaLoai;
        $nvkLoaiSanPham->nvkTenLoai = $request->nvkTenLoai;
        $nvkLoaiSanPham->nvkTrangThai = $request->nvkTrangThai;

        $nvkLoaiSanPham->save();

        return redirect()->route('nvkadmins.nvkloaisanpham');
    }
    // Get - nvkDelete
    public function nvkDelete($id)
    {
        
        return redirect()->route('nvkadmins.nvkloaisanpham');
    }
}