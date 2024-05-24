<!DOCTYPE html>
<html>
<head>
    <title>Tạo Hồ Sơ</title>
</head>
<body>
    @if(isset($maHoSo))
    <!-- Hiển thị mã hồ sơ -->
    <p>Mã Hồ Sơ của bạn là: {{ $maHoSo }}</p>
@endif
@if($errors->any())
    <div style="background: red; padding: 5px; color: white;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('dang-ky-xet-tuyen') }}" method="post">
        @csrf
        <!-- Thêm các trường input cho hồ sơ -->
        <label for="MaHoSo">Mã Hồ Sơ:</label>
        <input type="text" name="MaHoSo" required>
        <br>

        <label for="HoDem">Họ Đệm:</label>
        <input type="text" name="HoDem" required>
        <br>

        <label for="Ten">Tên:</label>
        <input type="text" name="Ten" required>
        <br>

        <label for="NgayThangNamSinh">Ngày Tháng Năm Sinh:</label>
        <input type="date" name="NgayThangNamSinh" required>
        <br>

        <label for="GioiTinh">Giới Tính:</label>
        <input type="text" name="GioiTinh" required>
        <br>

        <label for="DanToc">DanToc:</label>
        <input type="text" name="DanToc" required>
        <br>

        <label for="CCCD">CCCD:</label>
        <input type="text" name="CCCD" required>
        <br>

        <label for="HKTT">HKTT:</label>
        <input type="text" name="HKTT" required>
        <br>

        <label for="TrinhDo">TrinhDo:</label>
        <input type="text" name="TrinhDo" required>
        <br>

        <label for="MaTinh">MaTinh:</label>
        <input type="text" name="MaTinh" required>
        <br>

        <label for="TenTruong">TenTruong:</label>
        <input type="text" name="TenTruong" required>
        <br>

        <label for="NamTotNghiep">NamTotNghiep:</label>
        <input type="text" name="NamTotNghiep" required>
        <br>

        <label for="Email">Email:</label>
        <input type="text" name="Email" required>
        <br>

        <label for="SDT">SDT:</label>
        <input type="text" name="SDT" required>
        <br>

        <label for="DoiTuongUT">DoiTuongUT:</label>
        <input type="text" name="DoiTuongUT">
        <br>

        <label for="KhuVucUT">KhuVucUT:</label>
        <input type="text" name="KhuVucUT">
        <br>

        <label for="DiaChi">DiaChi:</label>
        <input type="text" name="DiaChi" required>
        <br>

        <label for="HinhThuc">Nganh_ID :</label>
        <input type="text" name="Nganh_ID" required>
        <br>

        <label for="HinhThuc">HinhThuc :</label>
        <input type="text" name="HinhThuc" required>
        <br>

        <label for="DiemMon1">DiemMon1 :</label>
        <input type="text" name="DiemMon1" required>
        <br>

        <label for="DiemMon2">DiemMon2 :</label>
        <input type="text" name="DiemMon2" required>
        <br>

        <label for="DiemMon3">DiemMon3 :</label>
        <input type="text" name="DiemMon3" required>
        <br>

        <button type="submit">Gửi Hồ Sơ</button>
    </form>
</body>
</html>
