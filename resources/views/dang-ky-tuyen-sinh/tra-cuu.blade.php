<!DOCTYPE html>
<html>
<head>
    <title>Kết Quả Tra Cứu Hồ Sơ</title>
</head>
<body>
    <h1>Tra Cứu Hồ Sơ</h1>
    <!-- Form tra cứu -->
    <form action="{{ route('tra-cuu-ho-so') }}" method="post">
        @csrf

        <label for="type">Chọn loại tra cứu:</label>
        <select name="type" id="type">
            <option value="MaHoSo" @if($type == 'MaHoSo') selected @endif>Mã Hồ Sơ</option>
            <option value="CCCD" @if($type == 'CCCD') selected @endif>CCCD</option>
            <option value="Email" @if($type == 'Email') selected @endif>Email</option>
            <option value="SDT" @if($type == 'SDT') selected @endif>Số Điện Thoại</option>
        </select>

        <label for="value">Nhập giá trị tra cứu:</label>
        <input type="text" name="value" value="{{ $value }}" required>

        <button type="submit">Tra Cứu</button>
    </form>

    <!-- Kết quả tra cứu -->
    @if(isset($hosoxettuyen))
        <h2>Thông tin Hồ Sơ</h2>
        <p>Mã Hồ Sơ: {{ $hosoxettuyen->MaHoSo }}</p>
        <p>Họ và Tên: {{ $hosoxettuyen->HoDem }} {{ $hosoxettuyen->Ten }}</p>
        <p>Ngày tháng năm sinh: {{ $formattedNgayThangNamSinh }}</p>
        <p>Tên Trường: {{ $hosoxettuyen->TenTruong }}</p>
        <p>Trạng thái: {{ $TrangThai }}</p>
        @if($NgayXet !== null)
            <p>Ngày xét: {{ $NgayXet }}</p>
        @endif
    @elseif(request()->filled('value'))
        <p>Không tìm thấy hồ sơ với giá trị tra cứu "{{ $value }}" theo loại "{{ $type }}".</p>
    @endif
</body>
</html>