<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NVK_CT_HOA_DONController;
use App\Http\Controllers\NVK_HOA_DONController;
use App\Http\Controllers\NVK_KHACH_HANGController;
use App\Http\Controllers\NVK_LOGIN_loginController;
use App\Http\Controllers\NVK_LOGIN_USERController;
use App\Http\Controllers\NVKSANPHAMController;
use App\Http\Controllers\NVKLOAISANPHAMController; 
use App\Http\Controllers\NVK_Quan_TriController;
use App\Http\Controllers\NVK_SIGNUPController;
use App\Http\Controllers\NVK_TIN_TUCController;
use App\Http\Controllers\NVKDanhSachQuanTriController;
use App\Models\NVKSanPham;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nvk-admins/nvk-login',[NVK_Quan_TriController::class,'nvkLogin'])->name('admins.nvkLogin');
Route::post('/nvk-admins/nvk-login',[NVK_Quan_TriController::class,'nvkLoginSubmit'])->name('admins.nvkLoginSubmit'); 
Route::get('/nvk-admins/nvk-quan-tri',[nvk_QUAN_TRIController::class,'nvkList'])->name('nvkadmins.nvkquantri');
#QTV
//detail
Route::get('/nvk-admins/nvk-quan-tri/nvk-detail/{id}', [nvk_QUAN_TRIController::class, 'nvkDetail'])->name('nvkadmin.nvkquantri.nvkDetail');
//create
Route::get('/nvk-admins/nvk-quan-tri/nvk-create',[nvk_QUAN_TRIController::class,'nvkCreate'])->name('nvkadmin.nvkquantri.nvkcreate');
Route::post('/nvk-admins/nvk-quan-tri/nvk-create',[nvk_QUAN_TRIController::class,'nvkCreateSubmit'])->name('nvkadmin.nvkquantri.nvkCreateSubmit');
//edit
Route::get('/nvk-admins/nvk-quan-tri/nvk-edit/{id}', [nvk_QUAN_TRIController::class, 'nvkEdit'])->name('nvkadmin.nvkquantri.nvkedit');
Route::post('/nvk-admins/nvk-quan-tri/nvk-edit/{id}', [nvk_QUAN_TRIController::class, 'nvkEditSubmit'])->name('nvkadmin.nvkquantri.nvkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/nvk-admins/nvk-quan-tri/nvk-delete/{id}', [nvk_QUAN_TRIController::class, 'nvkDelete'])->name('nvkadmin.nvkquantri.nvkdelete');

#Admin - row
Route::get('/nvk-admins',function(){
    return view('nvkAdmins.index');
});

#admins - danh muc--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nvk-admins/nvkdanhsachquantri/nvkdanhmuc', [NVKDanhSachQuanTriController::class, 'danhmuc'])->name('nvkadmins.nvkdanhsachquantri.nvkdanhmuc');
#admins - tin tức --------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nvk-admins/nvkdanhsachquantri/nvktintuc', [NVKDanhSachQuanTriController::class, 'tintuc'])->name('nvkadmins.nvkdanhsachquantri.nvkdanhmuc.nvktintuc');
// Sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nvk-admins/nvkdanhsachquantri/nvksanpham', [NVKDanhSachQuanTriController::class, 'sanpham'])->name('nvkadmins.nvkdanhsachquantri.nvkdanhmuc.nvksanpham');
#admins - nguoidung--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nvk-admins/nvkdanhsachquantri/nvknguoidung', [NVKDanhSachQuanTriController::class, 'nguoidung'])->name('nvkadmins.nvkdanhsachquantri.nvknguoidung');


Route::get('/nvk-admins/nvk-loai-san-pham',[NVKLOAISANPHAMController::class,'nvkList'])->name('nvkadmins.nvkloaisanpham');
Route::get('/nvk-admins/nvk-loai-san-pham/nvk-create',[NVKLOAISANPHAMController::class,'nvkCreate'])->name('nvkadmins.nvkloaisanpham.nvkcreate');
Route::post('/nvk-admins/nvk-loai-san-pham/nvk-create',[NVKLOAISANPHAMController::class,'nvkCreateSubmit'])->name('nvkadmins.nvkloaisanpham.nvkcreatesubmit');

#edit
Route::get('/nvk-admins/nvk-loai-san-pham/nvk-edit/{id}',[NVKLOAISANPHAMController::class,'nvkEdit'])->name('nvkadmins.nvkloaisanpham.nvkedit');
Route::post('/nvk-admins/nvk-loai-san-pham/nvk-edit',[NVKLOAISANPHAMController::class,'nvkEditSubmit'])->name('nvkadmins.nvkloaisanpham.nvkeditsubmit');

#detail
Route::get('/nvk-admins/nvk-loai-san-pham/nvk-detail/{id}',[NVKLOAISANPHAMController::class,'nvkGetDetail'])->name('nvkadmins.nvkloaisanpham.nvkGetDetail');

#delete
Route::get('/nvk-admins/nvk-loai-san-pham/nvk-delete/{id}',[NVKLOAISANPHAMController::class,'nvkDelete'])->name('nvkadmins.nvkloaisanpham.nvkdelete');


#san pham
Route::get('/nvk-admins/nvk-san-pham/search', [NVKSANPHAMController::class, 'searchAdmins'])->name('nvklogin.searchAdmins');
Route::get('/nvk-admins/nvk-san-pham',[NVKSANPHAMController::class,'NVKList'])
->name('nvkadmins.nvksanpham');
Route::get('/nvk-admins/nvk-san-pham/nvk-create',[NVKSANPHAMController::class,'NVKCreate'])
->name('nvkadmins.nvksanpham.nvkcreate');
Route::post('/nvk-admins/nvk-san-pham/nvk-create',[NVKSanPham::class,'nvkCreateSubmit'])->name('nvkadmins.nvksanpham.nvkCreateSubmit');
//detail
Route::get('/nvk-admins/nvk-san-pham/nvk-detail/{id}', [NVKSanPham::class, 'nvkDetail'])->name('nvkadmins.nvksanpham.nvkDetail');
 // edit
Route::get('/nvk-admins/nvk-san-pham/nvk-edit/{id}', [NVKSanPham::class, 'nvkEdit'])->name('nvkadmins.nvksanpham.nvkedit');
// Xử lý cập nhật sản phẩm
Route::post('/nvk-admins/nvk-san-pham/nvk-edit/{id}', [NVKSanPham::class, 'nvkEditSubmit'])->name('nvkadmins.nvksanpham.nvkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/nvk-admins/nvk-san-pham/nvk-delete/{id}', [NVKSanPham::class, 'nvkdelete'])->name('nvkadmins.nvksanpham.nvkdelete');

// khach hang--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/nvk-admins/nvk-khach-hang',[NVK_KHACH_HANGController::class,'nvkList'])->name('nvkadmins.nvkkhachhang');
//detail
Route::get('/nvk-admins/nvk-khach-hang/nvk-detail/{id}', [nvk_KHACH_HANGcontroller::class, 'nvkDetail'])->name('nvkadmins.nvkkhachhang.nvkDetail');
//create
Route::get('/nvk-admins/nvk-khach-hang/nvk-create',[nvk_KHACH_HANGcontroller::class,'nvkCreate'])->name('nvkadmins.nvkkhachhang.nvkcreate');
Route::post('/nvk-admins/nvk-khach-hang/nvk-create',[nvk_KHACH_HANGcontroller::class,'nvkCreateSubmit'])->name('nvkadmin.nvkkhachhang.nvkCreateSubmit');
//edit
Route::get('/nvk-admins/nvk-khach-hang/nvk-edit/{id}', [nvk_KHACH_HANGcontroller::class, 'nvkEdit'])->name('nvkadmins.nvkkhachhang.nvkedit');
Route::post('/nvk-admins/nvk-khach-hang/nvk-edit/{id}', [nvk_KHACH_HANGcontroller::class, 'nvkEditSubmit'])->name('nvkadmins.nvkkhachhang.nvkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/nvk-admins/nvk-khach-hang/nvk-delete/{id}', [nvk_KHACH_HANGcontroller::class, 'nvkDelete'])->name('nvkadmins.nvkkhachhang.nvkdelete');

// Hóa Đơn--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/nvk-admins/nvk-hoa-don',[NVK_HOA_DONController::class,'nvkList'])->name('nvkadmins.nvkhoadon');
//detail
Route::get('/nvk-admins/nvk-hoa-don/nvk-detail/{id}', [nvk_HOA_DONController::class, 'nvkDetail'])->name('nvkadmins.nvkhoadon.nvkDetail');
//create
Route::get('/nvk-admins/nvk-hoa-don/nvk-create',[nvk_HOA_DONController::class,'nvkCreate'])->name('nvkadmins.nvkhoadon.nvkcreate');
Route::post('/nvk-admins/nvk-hoa-don/nvk-create',[nvk_HOA_DONController::class,'nvkCreateSubmit'])->name('nvkadmins.nvkhoadon.nvkCreateSubmit');
//edit
Route::get('/nvk-admins/nvk-hoa-don/nvk-edit/{id}', [nvk_HOA_DONController::class, 'nvkEdit'])->name('nvkadmins.nvkhoadon.nvkedit');
Route::post('/nvk-admins/nvk-hoa-don/nvk-edit/{id}', [nvk_HOA_DONController::class, 'nvkEditSubmit'])->name('nvkadmins.nvkhoadon.nvkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/nvk-admins/nvk-hoa-don/nvk-delete/{id}', [nvk_HOA_DONController::class, 'nvkDelete'])->name('nvkadmins.nvkhoadon.nvkdelete');

// Chi Tiết Hóa Đơn--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/nvk-admins/nvk-ct-hoa-don',[NVK_CT_HOA_DONController::class,'nvkList'])->name('nvkadmins.nvkcthoadon');
//detail
Route::get('/nvk-admins/nvk-ct-hoa-don/nvk-detail/{id}', [nvk_CT_HOA_DONController::class, 'nvkDetail'])->name('nvkadmins.nvkcthoadon.nvkDetail');
//create
Route::get('/nvk-admins/nvk-ct-hoa-don/nvk-create',[nvk_CT_HOA_DONController::class,'nvkCreate'])->name('nvkadmins.nvkcthoadon.nvkcreate');
Route::post('/nvk-admins/nvk-ct-hoa-don/nvk-create',[nvk_CT_HOA_DONController::class,'nvkCreateSubmit'])->name('nvkadmins.nvkcthoadon.nvkCreateSubmit');
//edit
Route::get('/nvk-admins/nvk-ct-hoa-don/nvk-edit/{id}', [nvk_CT_HOA_DONController::class, 'nvkEdit'])->name('nvkadmins.nvkcthoadon.nvkedit');
Route::post('/nvk-admins/nvk-ct-hoa-don/nvk-edit/{id}', [nvk_CT_HOA_DONController::class, 'nvkEditSubmit'])->name('nvkadmins.nvkcthoadon.nvkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/nvk-admins/nvk-ct-hoa-don/nvk-delete/{id}', [nvk_CT_HOA_DONController::class, 'nvkDelete'])->name('nvkadmins.nvkcthoadon.nvkdelete');

// NvkLogin - Routes
Route::get('/nvk-login', [HomeController::class, 'index'])->name('nvklogin.home');
Route::get('/nvk-login1', [HomeController::class, 'index1'])->name('nvklogin.home1');
// Hiển thị chi tiết sản phẩm
Route::get('/nvk-login/show/{id}', [HomeController::class, 'show'])->name('nvklogin.show');
// search
Route::get('/search', [NVKSANPHAMController::class, 'search'])->name('nvklogin.search');
Route::get('/search1', [NVKSANPHAMController::class, 'search1'])->name('nvklogin.search1');

Route::get('/NvkLogin/nvk-login', [NVK_LOGIN_USERController::class, 'nvkLogin'])->name('nvklogin.login');
Route::post('/NvkLogin/nvk-login', [NVK_LOGIN_USERController::class, 'nvkLoginSubmit'])->name('nvklogin.nvkLoginSubmit');
Route::get('/NvkLogin/logout', [NVK_LOGIN_USERController::class, 'nvkLogout'])->name('nvklogin.logout');

// Tin Tức--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/nvk-admins/nvk-tin-tuc',[NVK_TIN_TUCController::class,'nvkList'])->name('nvkadmins.nvktintuc');
//detail
Route::get('/nvk-admins/nvk-tin-tuc/nvk-detail/{id}', [nvk_TIN_TUCController::class, 'nvkDetail'])->name('nvkadmins.nvktintuc.nvkDetail');
//create
Route::get('/nvk-admins/nvk-tin-tuc/nvk-create',[nvk_TIN_TUCController::class,'nvkCreate'])->name('nvkadmins.nvktintuc.nvkcreate');
Route::post('/nvk-admins/nvk-tin-tuc/nvk-create',[nvk_TIN_TUCController::class,'nvkCreateSubmit'])->name('nvkadmins.nvktintuc.nvkCreateSubmit');
//edit
Route::get('/nvk-admins/nvk-tin-tuc/nvk-edit/{id}', [nvk_TIN_TUCController::class, 'nvkEdit'])->name('nvkadmins.nvktintuc.nvkedit');
Route::post('/nvk-admins/nvk-tin-tuc/nvk-edit/{id}', [nvk_TIN_TUCController::class, 'nvkEditSubmit'])->name('nvkadmins.nvktintuc.nvkEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/nvk-admins/nvk-tin-tuc/nvk-delete/{id}', [nvk_TIN_TUCController::class, 'nvkDelete'])->name('nvkadmins.nvktintuc.nvkdelete');

// hỗ trợ 
route::get('/nvk-login/support',function()
{
    return view('NvkLogin.support');
});

// signup
Route::get('/nvk-login/signup', [NVK_SIGNUPController::class, 'nvksignup'])->name('nvklogin.nvksignup');
Route::post('/nvk-login/signup', [nvk_SIGNUPController::class, 'nvksignupSubmit'])->name('nvklogin.nvksignupSubmit');



// Route để hiển thị sản phẩm trong trang thanh toán
Route::get('/nvk-login/thanhtoan/{product_id}', [nvk_CT_HOA_DONController::class, 'nvkthanhtoan'])->name('nvklogin.nvkthanhtoan');

// Route để xử lý thanh toán
Route::post('/nvk-login/thanhtoan', [nvk_CT_HOA_DONController::class, 'storeThanhtoan'])->name('nvklogin.storeThanhtoan');
// create hóa đơn login


// tạo bảng hóa đơn
Route::get('san-pham/{sanPham}', [nvk_CT_HOA_DONController::class, 'show'])->name('sanpham.show');
Route::post('mua-san-pham/{sanPham}', [nvk_CT_HOA_DONController::class, 'store'])->name('hoadon.store');

// xem bảng Hóa Đơn mới Tạo
Route::get('hoa-don/{hoaDonId}/san-pham/{sanPhamId}', [nvk_HOA_DONController::class, 'show'])->name('hoadon.show');



// tạo bảng chi tiết hóa đơn


// Route để tạo mới chi tiết hóa đơn
Route::get('/cthoadon/{hoaDonId}/{sanPhamId}', [nvk_CT_HOA_DONController::class, 'create'])->name('cthoadon.create');

// Route để lưu chi tiết hóa đơn
Route::post('/cthoadon/store', [nvk_CT_HOA_DONController::class, 'storecthoadon'])->name('cthoadon.storecthoadon');

// Route để hiển thị chi tiết hóa đơn
Route::get('/hoa-don-id/{hoaDonId}/san-pham-id/{sanPhamId}', [nvk_CT_HOA_DONController::class, 'cthoadonshow'])->name('cthoadon.cthoadonshow');

// giỏ hàng
use App\Http\Controllers\CartController;

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

// liên hệ (_menu) 
route::get('/nvklogin-lienhe',function(){
    return view('nvklogin.lienhe');
})->name('nvklogin.lienhe');
// giới thiệt (_menu) 
route::get('/nvklogin-gioithieu',function(){
    return view('nvklogin.gioithieu');
})->name('nvklogin.gioithieu');


// thông tin cá nhân
use App\Http\Controllers\nvk_TTNGUOIDUNGController;
// Route hiển thị form chỉnh sửa thông tin khách hàng
Route::get('/nvk-login/nvk-edit/{id}', [nvk_TTNGUOIDUNGController::class, 'nvkEdit'])->name('nvklogin.tt.nvkedit');
Route::post('/nvk-login/nvk-edit/{id}', [nvk_TTNGUOIDUNGController::class, 'nvkEditSubmit'])->name('nvklogin.tt.nvkEditSubmit');