<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoSoXetTuyen;
use App\Models\XetTuyenHoSo;
use App\Models\CanBoTS_HoSo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HoSoXetTuyenController extends Controller
{
    public function create(Request $request)
    {
        try {
            DB::beginTransaction();
            // Xử lý logic lưu hồ sơ vào cơ sở dữ liệu
            $hosoxettuyen = new HoSoXetTuyen();
            $hosoxettuyen->MaHoSo = $request->input('MaHoSo');
            $hosoxettuyen->HoDem = $request->input('HoDem');
            $hosoxettuyen->Ten = $request->input('Ten');
            $hosoxettuyen->NgayThangNamSinh = $request->input('NgayThangNamSinh');
            $hosoxettuyen->GioiTinh = $request->input('GioiTinh');
            $hosoxettuyen->DanToc = $request->input('DanToc');
            $hosoxettuyen->CCCD = $request->input('CCCD');
            $hosoxettuyen->HKTT = $request->input('HKTT');
            $hosoxettuyen->TrinhDo = $request->input('TrinhDo');
            $hosoxettuyen->MaTinh = $request->input('MaTinh');
            $hosoxettuyen->TenTruong = $request->input('TenTruong');
            $hosoxettuyen->NamTotNghiep = $request->input('NamTotNghiep');
            $hosoxettuyen->Email = $request->input('Email');
            $hosoxettuyen->SDT = $request->input('SDT');
            $hosoxettuyen->DoiTuongUT = $request->input('DoiTuongUT');
            $hosoxettuyen->KhuVucUT = $request->input('KhuVucUT');
            $hosoxettuyen->DiaChi = $request->input('DiaChi');
            $hosoxettuyen->NgayNop = now();
            $hosoxettuyen->Nganh_ID = $request->input('Nganh_ID');
            $hosoxettuyen->save();

            $maHoSo = $hosoxettuyen->MaHoSo;
            $existingHoSo = HoSoXetTuyen::where('MaHoSo', $maHoSo)->first();

            if (!$existingHoSo) {
                DB::rollback();
                return back()->withErrors(['error' => 'Không thể nhập điểm']);
            }

            $xettuyenhoso = new XetTuyenHoSo();
            $xettuyenhoso->HoSo_ID = $maHoSo;
            $xettuyenhoso->HinhThuc = $request->input('HinhThuc');
            $xettuyenhoso->DiemMon1 = $request->input('DiemMon1');
            $xettuyenhoso->DiemMon2 = $request->input('DiemMon2');
            $xettuyenhoso->DiemMon3 = $request->input('DiemMon3');
            $xettuyenhoso->save();

            DB::commit();

            return view('dang-ky-tuyen-sinh.gui-ho-so', ['maHoSo' => $maHoSo]);

        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
            // Xử lý lỗi và trả về thông báo cho người dùng
            return back()->withErrors(['error' => 'Đã xảy ra lỗi. Vui lòng thử lại.']);
        }
    }

    public function showForm()
    {
        return view('dang-ky-tuyen-sinh.gui-ho-so');
    }

    public function traCuuHoSo(Request $request)
    {
        $type = $request->input('type', 'MaHoSo');
        $value = $request->input('value', $request->input('code'));

        $query = HoSoXetTuyen::query();

        if ($type == 'MaHoSo') {
            $query->where('MaHoSo', $value);
        } elseif ($type == 'CCCD') {
            $query->where('CCCD', $value);
        } elseif ($type == 'Email') {
            $query->where('Email', $value);
        } elseif ($type == 'SDT') {
            $query->where('SDT', $value);
        }

        $hosoxettuyen = $query->first();

        $formattedNgayThangNamSinh = $hosoxettuyen ? Carbon::parse($hosoxettuyen->NgayThangNamSinh)->format('d/m/Y') : null;

        // Truy vấn tb_xettuyen
        $XetTuyenHoSo = XetTuyenHoSo::where('HoSo_ID', $hosoxettuyen->MaHoSo)->first();
        // Lấy TrangThai nếu có, ngược lại sử dụng mặc định 'Đang xử lý'
        $TrangThai = $XetTuyenHoSo ? $XetTuyenHoSo->TrangThai : 'Đang xử lý';
    
        // Truy vấn tb_canbots_hoso
        $CanBoTS_HoSo = CanBoTS_HoSo::where('HoSo_ID', $hosoxettuyen->MaHoSo)->first();
        // Lấy NgayXet nếu có, ngược lại null
        $NgayXet = $CanBoTS_HoSo ? $CanBoTS_HoSo->NgayXet : null;

        return view('dang-ky-tuyen-sinh.tra-cuu', compact('hosoxettuyen', 'type', 'value', 'formattedNgayThangNamSinh', 'TrangThai', 'NgayXet'));
    }
}
