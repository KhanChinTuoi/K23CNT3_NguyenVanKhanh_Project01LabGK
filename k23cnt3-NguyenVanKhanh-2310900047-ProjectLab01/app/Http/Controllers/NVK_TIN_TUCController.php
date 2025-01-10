<?php

namespace App\Http\Controllers;

use App\Models\nvk_TIN_TUC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NVK_TIN_TUCController extends Controller
{
    public function nvkList()
{
    $nvktinTucs = nvk_TIN_TUC::all();
        
    // Phân trang kết quả, thay 10 bằng số lượng bạn muốn mỗi trang
    $nvktinTucs = nvk_TIN_TUC::paginate(10);
    
    
    // Return the view with the paginated data
    return view('NvkAdmins.nvktintuc.nvk-list', ['nvktinTucs' => $nvktinTucs]);
}

    

    // Show the detail of a specific news item -------------------------------------------
    public function nvkDetail($id)
    {
        $nvktinTuc = nvk_TIN_TUC::findOrFail($id);
        return view('NvkAdmins.nvktintuc.nvk-detail', ['nvktinTuc' => $nvktinTuc]);
    }

    // Show the create form for a new news item ----------------------------------------
    public function nvkCreate()
    {
        return view('NvkAdmins.nvktintuc.nvk-create');
    }

    // Handle the form submission for creating a new news item ---------------------------
    public function nvkCreateSubmit(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'nvkMaTT' => 'required|unique:nvk_TIN_TUC,nvkMaTT',
            'nvkTieuDe' => 'required|string|max:255',
            'nvkMoTa' => 'required|string',
            'nvkNoiDung' => 'required|string',
            'nvkNgayDangTin' => 'required|date',
            'nvkNgayCapNhat' => 'required|date',
            'nvkHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Optional image
            'nvkTrangThai' => 'required|in:0,1',  // 0 - inactive, 1 - active
        ]);

        // Create the new news item
        $nvktinTuc = new nvk_TIN_TUC();
        $nvktinTuc->nvkMaTT = $request->nvkMaTT;
        $nvktinTuc->nvkTieuDe = $request->nvkTieuDe;
        $nvktinTuc->nvkMoTa = $request->nvkMoTa;
        $nvktinTuc->nvkNoiDung = $request->nvkNoiDung;
        $nvktinTuc->nvkNgayDangTin = $request->nvkNgayDangTin;
        $nvktinTuc->nvkNgayCapNhat = $request->nvkNgayCapNhat;

        // Check if there's an image and save it
        if ($request->hasFile('nvkHinhAnh')) {
            $imagePath = $request->file('nvkHinhAnh')->store('public/img/tin_tuc');
            $nvktinTuc->nvkHinhAnh = 'img/tin_tuc/' . basename($imagePath);
        }

        $nvktinTuc->nvkTrangThai = $request->nvkTrangThai;
        $nvktinTuc->save();

        return redirect()->route('nvkadmins.nvktintuc')->with('success', 'Tin tức đã được tạo thành công.');
    }

    // Delete a news item ----------------------------------------------------------------
    public function nvkDelete($id)
    {
        $nvktinTuc = nvk_TIN_TUC::findOrFail($id);
        $nvktinTuc->delete();

        return back()->with('success', 'Tin tức đã được xóa thành công.');
    }

    // Show the edit form for a specific news item --------------------------------------
    public function nvkEdit($id)
    {
        $nvktinTuc = nvk_TIN_TUC::findOrFail($id);
        return view('NvkAdmins.nvktintuc.nvk-edit', ['nvktinTuc' => $nvktinTuc]);
    }

    // Handle the form submission for updating an existing news item ---------------------
    public function nvkEditSubmit(Request $request, $id)
{
    $validated = $request->validate([
        'nvkTieuDe' => 'required|string|max:255',
        'nvkMoTa' => 'required|string|max:500',
        'nvkNoiDung' => 'required|string',
        'nvkHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'nvkNgayDangTin' => 'required|date',
        'nvkNgayCapNhat' => 'nullable|date',
        'nvkTrangThai' => 'required|in:0,1',
    ]);

    // Retrieve the news article to update
    $nvktinTuc = nvk_TIN_TUC::findOrFail($id);

    // Handle image upload
    if ($request->hasFile('nvkHinhAnh')) {
        // Delete old image if exists
        if ($nvktinTuc->nvkHinhAnh) {
            Storage::delete('public/' . $nvktinTuc->nvkHinhAnh);
        }

        $imagePath = $request->file('nvkHinhAnh')->store('nvktinTuc', 'public');
        $nvktinTuc->nvkHinhAnh = $imagePath;
    }

    // Update the news article
    $nvktinTuc->nvkTieuDe = $request->nvkTieuDe;
    $nvktinTuc->nvkMoTa = $request->nvkMoTa;
    $nvktinTuc->nvkNoiDung = $request->nvkNoiDung;
    $nvktinTuc->nvkNgayDangTin = $request->nvkNgayDangTin;
    $nvktinTuc->nvkNgayCapNhat = $request->nvkNgayCapNhat ?? now();
    $nvktinTuc->nvkTrangThai = $request->nvkTrangThai;
    $nvktinTuc->save();

    return redirect()->route('nvkadmins.nvktintuc')->with('success', 'Tin tức đã được cập nhật!');
}

}
