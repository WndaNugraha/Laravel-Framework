<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengenalancontroller extends Controller
{
    public function pengenalan(){

        $nama = "Bayu Prima Yuda";
        $umur = "23";
        return view('pages1.pengenalan',compact('nama','umur'));

    }

    public function intro($nama,$alamat,$umur){

        return view('pages1.intro',compact('nama','alamat','umur'));
    }

    public function siswa()
    {
        $a = [
            array('id' => 1, 'nama' => 'Wanda nugraha', 'umur' => 17, 'kelas' => 'XII RPL 2', 'mapel' => 
            ['B.Indonesia','B.Inggris']),
            array('id' => 2, 'nama' => 'Asep', 'umur' => 16, 'kelas' => 'XII RPL 17','mapel'=>
            ['MTK','IPA']),
            array('id' => 3, 'nama' => 'Ujang', 'umur' => 25, 'kelas' => 'XII RPL 10','mapel'=>
            ['SIMDIG','B.SUNDA']),
            array('id' => 4, 'nama' => 'Jamal', 'umur' => 23, 'kelas' => 'XII RPL 11','mapel'=>
            ['PAI','AL-QURAN']),
            
        ];
        

        return view('pages1.siswa',['siswa' => $a]);
    }
    
}
