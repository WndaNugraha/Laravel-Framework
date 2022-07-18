<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihancontroller extends Controller
{
    public function saya(){
        $menu=[
           
            array("beranda" => "Beranda","berita" => ['Olahraga','Politik','Manca Negara'], "tentang" => 'Tentang')
        ];
        return view('pages1.saya',['saya'=>$menu]);
    }

    public function dosen(){
        $mahasiswa1 = [
            array('nama'=> 'Muhammad Soleh','nilai'=>78,'matkul'=>'Pemrograman Mobile'),
            array('nama'=> 'Jujun Junaedi','nilai'=>85,'matkul'=>'Pemrograman Mobile'),
            array('nama'=> 'Mamat Alkatiri','nilai'=>90,'matkul'=>'Pemrograman Mobile'),
            array('nama'=> 'Ubay Holin','nilai'=>87,'matkul'=>'Pemrograman Mobile'),
            array('nama'=> 'Fadillah','nilai'=>95,'matkul'=>'Pemrograman Mobile')
        ];

        $mahasiswa2 = [
            array('nama'=> 'Alfred McTomminay', 'nilai'=>67,'matkul'=>'Pemrograman Web'),
            array('nama'=> 'Bruno Kasmir', 'nilai'=>90,'matkul'=>'Pemrograman Web'),
            array('nama'=> 'Akid Hendra', 'nilai'=>50,'matkul'=>'Pemrograman Web'),
            array('nama'=> 'Dany Irawan', 'nilai'=>70,'matkul'=>'Pemrograman Web'),
            array('nama'=> 'Chandra Mega Putra', 'nilai'=>60,'matkul'=>'Pemrograman Web')
        ];
        return view('pages1.mahasiswa',['dosen1'=>$mahasiswa1],['dosen2'=>$mahasiswa2]);
    }

    public function tv(){
        $stasiun=[
            array('channel'=>'NET TV', 'jam'=>'15.00-15.30 WIB', 'program'=>'Ultramen','tanggal'=>'14/07/2022'),
            array('channel'=>'TVRI', 'jam'=>'13.00-13.30 WIB', 'program'=>'Karawitan','tanggal'=>'14/07/2022'),
            array('channel'=>'BEINSPORT', 'jam'=>'03.00-04.30 WIB', 'program'=>'Sepak Bola','tanggal'=>'14/07/2022'),
            array('channel'=>'OChanel', 'jam'=>'10.30-11.00 WIB', 'program'=>'Talk Show','tanggal'=>'14/07/2022'),
            array('channel'=>'INDOSIAR', 'jam'=>'07.00-15.00 WIB', 'program'=>'Azab','tanggal'=>'14/07/2022'),
        ];
        return view('pages1.tv',['tv'=>$stasiun]);
    }

    public function belanja(){
        $Pembeli = [
            array('barang'=>'Sepatu', 'harga'=>250000,'nama'=>'alfian'),
            array('barang'=>'Baju', 'harga'=>100000,'nama'=>'alfian'),
            array('barang'=>'Celana', 'harga'=>150000,'nama'=>'alfian'),
            array('barang'=>'Kupluk', 'harga'=>100000,'nama'=>'alfian'),
            array('barang'=>'Topi', 'harga'=>100000,'nama'=>'dida'),
            array('barang'=>'Baju', 'harga'=>75000,'nama'=>'dida'),
            array('barang'=>'Celana', 'harga'=>125000,'nama'=>'dida')
        ];
        return view('pages1.belanja',['belanja1'=>$Pembeli]);
    }

}
