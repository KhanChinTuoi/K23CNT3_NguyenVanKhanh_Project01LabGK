@extends('_layouts.admins._master')

@section('title', 'Nhu Cầu Thị Trường Điện Thoại Hiện Nay')

@section('content-body')
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4" style="font-family: 'Roboto', sans-serif;">Nhu Cầu Thị Trường Điện Thoại Hiện Nay</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">STT</th>
                    <th scope="col" class="text-center">Xu Hướng Tiêu Thụ</th>
                    <th scope="col" class="text-center">Độ Tuổi Người Dùng</th>
                    <th scope="col" class="text-center">Nhu Cầu Chính</th>
                    <th scope="col" class="text-center">Tính Năng Ưu Tiên</th>
                    <th scope="col" class="text-center">Thị Trường Mới</th>
                    <th scope="col" class="text-center">Thương Hiệu Phổ Biến</th>
                    <th scope="col" class="text-center">Mức Giá Phổ Biến</th>
                    <th scope="col" class="text-center">Công Nghệ Xu Hướng</th>
                    <th scope="col" class="text-center">Ngày Cập Nhật</th>
                </tr>
            </thead>
            
            <tbody>
                <!-- Ví dụ dòng cho "Điện thoại chơi game" -->
                <tr class="text-center">
                    <td>1</td>
                    <td>Điện thoại chơi game</td>
                    <td>18-30 tuổi</td>
                    <td>Chơi game, hiệu suất cao</td>
                    <td>Chipset mạnh, màn hình mượt mà, tản nhiệt</td>
                    <td>Châu Á, Bắc Mỹ</td>
                    <td>Asus, Xiaomi, Samsung</td>
                    <td>10 triệu - 20 triệu VND</td>
                    <td>5G, Màn hình 120Hz, Sạc nhanh 65W</td>
                    <td>25/12/2023</td>
                </tr>

                <!-- Ví dụ dòng cho "Điện thoại chụp ảnh" -->
                <tr class="text-center">
                    <td>2</td>
                    <td>Điện thoại chụp ảnh</td>
                    <td>18-40 tuổi</td>
                    <td>Chụp ảnh đẹp, quay video chất lượng</td>
                    <td>Camera 108MP, ống kính telephoto, zoom quang học</td>
                    <td>Châu Âu, Trung Đông</td>
                    <td>Apple, Samsung, Huawei</td>
                    <td>15 triệu - 30 triệu VND</td>
                    <td>Camera AI, Quay video 4K 60fps</td>
                    <td>22/12/2023</td>
                </tr>

                <!-- Ví dụ dòng cho "Điện thoại pin trâu" -->
                <tr class="text-center">
                    <td>3</td>
                    <td>Điện thoại pin trâu</td>
                    <td>30-50 tuổi</td>
                    <td>Pin lâu, tiết kiệm năng lượng</td>
                    <td>Pin 5000mAh trở lên, sạc nhanh, tiết kiệm năng lượng</td>
                    <td>Châu Á, Nam Mỹ</td>
                    <td>Xiaomi, Oppo, Realme</td>
                    <td>5 triệu - 10 triệu VND</td>
                    <td>Pin 6000mAh, Sạc nhanh 33W</td>
                    <td>18/12/2023</td>
                </tr>

                <!-- Ví dụ dòng cho "Điện thoại gập" -->
                <tr class="text-center">
                    <td>4</td>
                    <td>Điện thoại gập</td>
                    <td>25-45 tuổi</td>
                    <td>Thiết kế độc đáo, di động tiện lợi</td>
                    <td>Màn hình gập, màn hình OLED, bảo mật vân tay</td>
                    <td>Châu Á, Bắc Mỹ</td>
                    <td>Samsung, Huawei, Motorola</td>
                    <td>25 triệu - 50 triệu VND</td>
                    <td>Màn hình gập, 5G, Bảo mật vân tay dưới màn hình</td>
                    <td>15/12/2023</td>
                </tr>

                <!-- Ví dụ dòng cho "Điện thoại giá rẻ" -->
                <tr class="text-center">
                    <td>5</td>
                    <td>Điện thoại giá rẻ</td>
                    <td>18-35 tuổi</td>
                    <td>Giá rẻ, hiệu suất ổn định</td>
                    <td>Màn hình lớn, camera đủ dùng, hiệu suất ổn</td>
                    <td>Châu Á, Nam Mỹ</td>
                    <td>Realme, Oppo, Vivo</td>
                    <td>3 triệu - 6 triệu VND</td>
                    <td>Camera 13MP, Pin 5000mAh</td>
                    <td>10/12/2023</td>
                </tr>
            </tbody>
        </table>

        <!-- Nút Quay lại -->
        <div class="text-center mt-3">
            <a href="{{ route('nvkadmins.nvkdanhsachquantri.nvkdanhmuc') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
@endsection