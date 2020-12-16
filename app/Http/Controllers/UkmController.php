<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class UkmController extends Controller
{
    public function ukm()
    {
        return view('ukm.form-ukm');
    }
 
    public function proses(Request $request)
    {
        $validasi = $request->validate([
            "nama" => ["required"],
            "nim" => ['required'],
            "umur" => ['numeric', "between:18,25"],
            "prodi" => ['required'],
            "foto" => ['file', "between:25,300"],
            "alasan" => ['required'],
        ]);

        $nama_file = time().".".$request->file("foto")->extension();

        $request->file("foto")->move(public_path(), $nama_file);

        echo $request->get("nama"), "<br>";
        echo $request->get("nim"), "<br>";
        echo $request->get("prodi"), "<br>";
        echo "<img src='/$nama_file'>", "<br>"; 

        echo "Pendaftaran anda sedang di proses";
    }
}