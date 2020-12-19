<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\SanPham;
use App\HangSanXuat;
use App\TinCongNghe;
use App\GioHang;
use App\DonHang;
use App\ChiTietDonHang;
use App\DonHangKhach;
use DB;
use Illuminate\Support\Facades\Auth;

class phoneController extends Controller
{
    public function index()
    {
        $tcn = DB::table('tin_cong_nghe')->orderBy('id','desc')->take(3)->get()->toArray();
        $all_sp = DB::table('san_pham')->orderBy('id','desc')->get()->toArray();
        return view('index',compact('all_sp','tcn'));
    }

    public function getAll()
    {
        $all_sp = DB::table('san_pham')->orderBy('id','desc')->get()->toArray();
        return view('dtdd')->with('all_sp',$all_sp);
    }
    public function getHSX($hsx)
    {
        $id_hsx = DB::table('hang_san_xuat')->where('tenHSX',$hsx)->value('id');
        $all_sp = DB::table('san_pham')->where('id_hsx',$id_hsx)->orderBy('id','desc')->get()->toArray();
        
        return view('hangsanxuat', compact('hsx', 'all_sp'));
    }
    public function getDienThoai($link)
    {
        $sp = DB::table('san_pham')->where('link',$link)->get()->toArray();
        
        return view('dienthoai', compact('sp'));
    }
    public function getTCN($id)
    {
        $tcn = TinCongNghe::find($id)->toArray();
        return view('tincongnghe', compact('tcn'));
    }

    public function SaveUsers(Request $rq)
    {
    	$tv = new Users();

    	$tv->hoTen = $rq->name;
    	$tv->sdt = $rq->sdt;
    	$tv->email = $rq->email;
    	$tv->password = bcrypt($rq->password);
    	$tv->role = 0;

    	$tv->save();

    	return view('register-success');
    }
    public function Edit(Request $rq)
    {
        $tv = Users::find(Auth::user()->id);

        $tv->hoTen = $rq->name;
        $tv->sdt = $rq->sdt;
        $tv->email = $rq->email;
        $tv->password = bcrypt($rq->password);

        $tv->save();

        return redirect()->Route('account');
    }
    public function Edituser(Request $rq)
    {
        $tv = Users::find($rq->id);

        $tv->hoTen = $rq->name;
        $tv->sdt = $rq->sdt;
        $tv->email = $rq->email;
        $tv->role = $rq->role;
        $tv->password = bcrypt($rq->password);

        $tv->save();

        return redirect()->Route('admin');
    }
    public function Login(Request $rq)
    {
        if (Auth::check()) {
            return redirect()->Route('index');
        }
        if (Auth::attempt(['sdt' => $rq->sdt, 'password' => $rq->password])) {
            return redirect()->Route('index');
        } else return view('login')->with('kt',false);
    }
    public function Logout()
    {
        Auth::logout();
        return redirect()->Route('index');
    }
    public function account()
    {
        if (!Auth::check()) {
            return redirect()->Route('index');
        }
        return view('account.account');
    }
    public function saveGioHang(Request $rq)
    {
        if (Auth::check()) {
            $gh = new GioHang();
            $gh->id_sp = $rq->id_sp;
            $gh->id_tv = Auth::user()->id;
            $gh->soLuong = 1;
            $gh->mauSac = $rq->mauSac;
            $gh->save();
            return redirect()->Route('gio-hang');
        } else {
            $dh = new DonHangKhach();
            $dh->hoTen = $rq->hoTen;
            $dh->sdt = $rq->sdt;
            $dh->email = $rq->email;
            $dh->diaChi = $rq->diaChi;
            $dh->id_sp = $rq->id_sp;
            $dh->soLuong = 1;
            $dh->mauSac = $rq->mauSac;
            $dh->save();
            return redirect()->Route('dat-hang-thanh-cong');
        }
    }
    public function datHangThanhCong()
    {
        return view('dat-hang');   
    }
    public function datHangThanhVien()
    {

        $id_tv = Auth::user()->id;
        $dh = new DonHang();
        $dh->id_tv = $id_tv;
        $dh->tinhTrang = "Chờ duyệt";
        $dh->save();

        $id_dh = DB::table('don_hang')->orderBy('id','desc')->take(1)->value('id');
        $gh = DB::select('SELECT id_sp,mauSac,sum(soLuong) as sl from gio_hang WHERE id_tv = ? GROUP BY id_sp,mauSac',[$id_tv]);
        foreach ($gh as $value) {
            $ctdh = new ChiTietDonHang();
            $ctdh->id_dh = $id_dh;
            $ctdh->id_sp = $value->id_sp;
            $ctdh->soLuong = $value->sl;
            $ctdh->mauSac = $value->mauSac;
            $ctdh->save();
        }
        DB::table('gio_hang')->where('id_tv',$id_tv)->delete();

        return view('dat-hang');   
    }
    public function gioHang()
    {
        $gh = DB::select('SELECT id_sp,sum(soLuong) as sl FROM `gio_hang`
            GROUP BY id_Sp');
        return view('giohang')->with('gh',$gh);
    }
    public function admin()
    {
        if (Auth::user()->role<1) {
            return redirect()->Route('index');
        }
        return view('admin.admin');
    }
    public function EditUsers($id)
    {
        $use = DB::table('users')->where('id',$id)->get();
        return view('account.sua')->with('use',$use);
    }
    public function DeleteUsers($id)
    {
        $use = DB::table('users')->where('id',$id)->delete();
        return redirect(asset('admin?page=tk'));
    }
    public function EditProducts($id)
    {
        $sp = DB::table('san_pham')->where('id',$id)->get();
        $hsx = HangSanXuat::all()->toArray();
        return view('admin.sanpham.sua',compact('sp','hsx'));
    }
    public function DeleteProducts($id)
    {
        $sp = DB::table('san_pham')->where('id',$id)->delete();
        return redirect(asset('admin?page=sp'));
    }
    public function themsp()
    {
        $hsx = HangSanXuat::all()->toArray();
        return view('admin.sanpham.them')->with('hsx',$hsx);
    }
    public function themsanpham(Request $rq)
    {
        $sp = new SanPham();
        $sp->tenSP = $rq->tenSP;
        $sp->link = $rq->link;
        $sp->moTa = $rq->moTa;
        $sp->thongTinChiTiet = $rq->thongTinChiTiet;
        $sp->gia = $rq->gia;
        $sp->mauSac = $rq->mauSac;
        $sp->baoHanh = $rq->baoHanh;
        $sp->khuyenMai = $rq->khuyenMai;
        if ($rq->hasFile('anh')) {
            $file = $rq->anh;
            $sp->anh = "img/anh-san-pham/".$file->getClientOriginalName();
            $file->move('img/anh-san-pham/', $file->getClientOriginalName());
        }
        $sp->manHinh = $rq->manHinh;
        $sp->bangTan_Sim = $rq->bangTan_Sim;
        $sp->boNhoTrong = $rq->boNhoTrong;
        $sp->ram = $rq->ram;
        $sp->cpu = $rq->cpu;
        $sp->gpu = $rq->gpu;
        $sp->heDieuHanh = $rq->heDieuHanh;
        $sp->camTruoc = $rq->camTruoc;
        $sp->camSau = $rq->camSau;
        $sp->pin = $rq->pin;
        $sp->id_hsx = $rq->id_hsx;
        $sp->save();
        return redirect(asset('admin?page=sp'));
    }
    public function suasp(Request $rq)
    {
        $sp = SanPham::find($rq->id);
        $sp->tenSP = $rq->tenSP;
        $sp->link = $rq->link;
        $sp->moTa = $rq->moTa;
        $sp->thongTinChiTiet = $rq->thongTinChiTiet;
        $sp->gia = $rq->gia;
        $sp->mauSac = $rq->mauSac;
        $sp->baoHanh = $rq->baoHanh;
        $sp->khuyenMai = $rq->khuyenMai;
        if ($rq->hasFile('anh')) {
            $file = $rq->anh;
            $sp->anh = "img/anh-san-pham/".$file->getClientOriginalName();
            $file->move('img/anh-san-pham/', $file->getClientOriginalName());
        }
        $sp->manHinh = $rq->manHinh;
        $sp->bangTan_Sim = $rq->bangTan_Sim;
        $sp->boNhoTrong = $rq->boNhoTrong;
        $sp->ram = $rq->ram;
        $sp->cpu = $rq->cpu;
        $sp->gpu = $rq->gpu;
        $sp->heDieuHanh = $rq->heDieuHanh;
        $sp->camTruoc = $rq->camTruoc;
        $sp->camSau = $rq->camSau;
        $sp->pin = $rq->pin;
        $sp->id_hsx = $rq->id_hsx;
        $sp->save();
        return redirect(asset('admin?page=sp'));
    }
    public function EditTcn($id)
    {
        $tcn = DB::table('tin_cong_nghe')->where('id',$id)->get();
        return view('admin.tincongnghe.sua')->with('tcn',$tcn);
    }
    public function DeleteTcn($id)
    {
        $tcn = DB::table('tin_cong_nghe')->where('id',$id)->delete();
        return redirect(asset('admin?page=tcn'));
    }
    public function themtcn()
    {
        return view('admin.tincongnghe.them');
    }
    public function themtincongnghe(Request $rq)
    {
        $tcn = new TinCongNghe();
        $tcn->tenTin = $rq->tenTin;
        $tcn->noiDung = $rq->noiDung;
        if ($rq->hasFile('anh')) {
            $file = $rq->anh;
            $tcn->anh = "img/anh-tin-cong-nghe/".$file->getClientOriginalName();
            $file->move('img/anh-tin-cong-nghe/', $file->getClientOriginalName());
        }
        $tcn->id_nv = Auth::user()->id;
        $tcn->save();
        return redirect(asset('admin?page=tcn'));
    }
    public function suatcn(Request $rq)
    {
        $tcn = TinCongNghe::find($rq->id);
        $tcn->tenTin = $rq->tenTin;
        $tcn->noiDung = $rq->noiDung;
        if ($rq->hasFile('anh')) {
            $file = $rq->anh;
            $tcn->anh = "img/anh-tin-cong-nghe/".$file->getClientOriginalName();
            $file->move('img/anh-tin-cong-nghe/', $file->getClientOriginalName());
        }
        $tcn->id_nv = Auth::user()->id;
        $tcn->save();
        return redirect(asset('admin?page=tcn'));
    }
    public function timkiem(Request $rq)
    {
        $key = $rq->key;
        $tk = DB::select("Select * from san_pham where tenSP like '%$rq->key%'");
        return view('timkiem',compact('tk','key'));
    }
    public function duyet($id)
    {
        $duyet = DonHangKhach::find($id);
        $duyet->tinhTrang = "Đã duyệt";
        $duyet->save();
        return redirect(asset('admin?page=dhk'));
    }
    public function duyet2($id)
    {
        $duyet = DonHang::find($id);
        $duyet->tinhTrang = "Đã duyệt";
        $duyet->save();
        return redirect(asset('admin?page=dhtv'));
    }
    public function chitietdonhang($id)
    {
        $id_tv = DB::table('don_hang')->where('id',$id)->value('id_tv');
        $ctdh = DB::table('chi_tiet_don_hang')->where('id_dh',$id)->get();
        return view('chitiet',compact('ctdh','id','id_tv'));
    }
    public function xoaDonHang($id)
    {
        DB::table('gio_hang')->where('id_sp',$id)->delete();
        return redirect(asset('gio-hang'));
    }
}
