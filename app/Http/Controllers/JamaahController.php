<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jamaah;
use Auth;
use Session;
use Redirect;
use Validator;
use Illuminate\Suppot\Facades\Input;
use Illuminate\Support\Facades\Storage;

class JamaahController extends Controller
{
    public function index()
    {
        
    }

    public function registerJamaah(Request $request)
    {

        //Specify filename
        $filename_ktp = "KTP_".$request->nama.".".$request->file('file_ktp')->getClientOriginalExtension();
        $filename_akta_lahir = "Akta Lahir_".$request->nama.".".$request->file('file_ktp')->getClientOriginalExtension();
        $filename_passport = "Passport_".$request->nama.".".$request->file('file_passport')->getClientOriginalExtension();
        $filename_kartu_keluarga = "KK_".$request->nama.".".$request->file('file_kartu_keluarga')->getClientOriginalExtension();
        $filename_buku_nikah = "Buku Nikah_".$request->nama.".".$request->file('file_buku_nikah')->getClientOriginalExtension();
        $filename_foto = "Foto_".$request->nama.".".$request->file('file_foto')->getClientOriginalExtension();

        //Store file in public/... directory
        $ktp = $request->file('file_ktp')->storeAs('public/ktp', $filename_ktp);
        $akta_lahir = $request->file('file_akta_lahir')->storeAs('public/akta_lahir', $filename_akta_lahir);
        $passport = $request->file('file_passport')->storeAs('public/passport', $filename_passport);
        $kartu_keluarga = $request->file('file_kartu_keluarga')->storeAs('public/kartu_keluarga', $filename_kartu_keluarga);
        $buku_nikah = $request->file('file_buku_nikah')->storeAs('public/buku_nikah', $filename_buku_nikah);
        $foto = $request->file('file_foto')->storeAs('public/foto', $filename_foto);//return path

        //Value in database
        $val_db_ktp = substr($ktp, 7);
        $val_db_akta = substr($akta_lahir, 7);
        $val_db_passport = substr($passport, 7);
        $val_db_kk = substr($kartu_keluarga, 7);
        $val_db_nikah = substr($buku_nikah, 7);
        $val_db_foto = substr($foto, 7);

        // $destinationPath_ktp = 'uploads/ktp';
        // $destinationPath_akta = 'uploads/akta_lahir';
        // $destinationPath_passport = 'uploads/passport';
        // $destinationPath_kartuKeluarga = 'uploads/kartu_keluarga';
        // $destinationPath_bukuNikah = 'uploads/buku_nikah';
        // $destinationPath_foto = 'uploads/foto';

        // $rules = [
        //     'nama' => 'required',
        // ];

        $paket_id = $request->paket.$request->program;

    	$jamaah = new Jamaah;
    	$jamaah->nama_lengkap = $request->nama;
    	$jamaah->jenis_kelamin = $request->jenis_kelamin;
    	$jamaah->tempat_lahir = $request->tempat_lahir;
    	$jamaah->tgl_lahir = $request->tanggal_lahir;
    	$jamaah->nama_ayah = $request->nama_ayah;
    	$jamaah->no_ktp = $request->no_ktp;
    	$jamaah->alamat = $request->alamat;
    	$jamaah->gol_darah = $request->gol_darah;
    	$jamaah->telp = $request->telp;
    	$jamaah->handphone = $request->handphone;
    	$jamaah->email = $request->email;
    	$jamaah->pendidikan = $request->pendidikan;
    	$jamaah->pekerjaan = $request->pekerjaan;
    	$jamaah->status_perkawinan = $request->status_perkawinan;
    	$jamaah->no_passport = $request->no_passport;
    	$jamaah->tempat_passport = $request->tempat_passport;
    	$jamaah->masa_berlaku_passport = $request->masa_berlaku_passport;
    	$jamaah->tanggal_passport = $request->tanggal_passport;
    	$jamaah->jumlah_umrah = $request->jumlah_umroh;
    	$jamaah->terakhir_umrah = $request->terakhir_umroh;
    	$jamaah->jumlah_haji = $request->jumlah_haji;
    	$jamaah->terakhir_haji = $request->terakhir_haji;
    	$jamaah->file_ktp = $val_db_ktp;
    	$jamaah->file_akta_lahir = $val_db_akta;
    	$jamaah->file_passport = $val_db_passport;
    	$jamaah->file_kartu_keluarga =$val_db_kk;
    	$jamaah->file_buku_nikah = $val_db_nikah;
    	$jamaah->file_foto = $val_db_foto;
    	$jamaah->nama_instansi = $request->nama_instansi;
    	$jamaah->jabatan = $request->jabatan;
    	$jamaah->alamat_instansi = $request->alamat_instansi;
    	$jamaah->kota_instansi = $request->kota_instansi;
    	$jamaah->kodepos_instansi = $request->kodepos_instansi;
    	$jamaah->nama_keluarga = $request->nama_keluarga;
    	$jamaah->hub_keluarga = $request->hub_keluarga;
    	$jamaah->telp_keluarga = $request->telp_keluarga;
    	$jamaah->handphone_keluarga = $request->handphone_keluarga;
    	$jamaah->alamat_keluarga = $request->alamat_keluarga;
    	$jamaah->penyakit = $request->penyakit;
        $jamaah->paket_id = $paket_id;
        $jamaah->save();

        return redirect('/');
    }

    public function cek(Request $request)
    {
        $status_jamaah = Jamaah::where('no_identitas','=',$request->kode_cek)->first();
        if($status_jamaah != NULL){
            return view('pages.hasil-status', ['status'=>$status_jamaah]);
        } else {
            $error_msg = "No Identitas tidak ditemukan.";
            return view('pages.cek-status', ['error_msg'=>$error_msg]);
        }
        // return response()->json(['data'=>$status_jamaah],200);
    }

    public function input(Request $request)
    {

        // $rules = [
        //     'nama' => 'required',
        // ];

        $jamaah = new Jamaah;
        $jamaah->nama_lengkap = $request->nama;
        $jamaah->jenis_kelamin = $request->jenis_kelamin;
        $jamaah->tempat_lahir = $request->tempat_lahir;
        $jamaah->tgl_lahir = $request->tanggal_lahir;
        $jamaah->usia = $request->usia;
        $jamaah->nama_ayah = $request->nama_ayah;
        $jamaah->no_identitas = $request->no_identitas;
        $jamaah->alamat = $request->alamat;
        $jamaah->kode_pos = $request->kode_pos;
        $jamaah->gol_darah = $request->gol_darah;
        $jamaah->telp = $request->telp;
        $jamaah->handphone = $request->handphone;
        $jamaah->email = $request->email;
        $jamaah->pendidikan = $request->pendidikan;
        $jamaah->pekerjaan = $request->pekerjaan;
        $jamaah->status_perkawinan = $request->status_perkawinan;
        $jamaah->merokok = $request->merokok;
        $jamaah->no_passport = $request->no_passport;
        $jamaah->tempat_passport = $request->tempat_passport;
        $jamaah->masa_berlaku_passport = $request->masa_berlaku_passport;
        $jamaah->tanggal_passport = $request->tanggal_passport;
        $jamaah->jumlah_umrah = $request->jumlah_umroh;
        $jamaah->terakhir_umrah = $request->terakhir_umroh;
        $jamaah->jumlah_haji = $request->jumlah_haji;
        $jamaah->terakhir_haji = $request->terakhir_haji;
        $jamaah->penyakit = $request->penyakit;
        $jamaah->nama_paket = $request->nama_paket;
        $jamaah->program = $request->program;
        $jamaah->tipe_kamar = $request->tipe_kamar;
        $jamaah->harga = $request->harga;
        $jamaah->tgl_berangkat = $request->tgl_berangkat;
        $jamaah->pembayaran = $request->pembayaran;
        $jamaah->save();

        return view('pages.sukses');
    }
}