<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class LesController extends Controller
{
    public function les()
    {
        return view('les.form-les');
    }
 
    public function proses(Request $request)
    {
        $validasi = $request->validate([
            "nama" => ["required"],
            "alamat" => ['required'],
            "no_hp" => ['numeric'],
            "umur" => ['numeric', "between:18,25"],
            "email" => ['required'],
        ]);

        echo $request->get("nama"), "<br>";
        echo $request->get("alamat"), "<br>";
        echo $request->get("no_hp"), "<br>";
        echo $request->get("umur"), "<br>";
        echo $request->get("email"), "<br>";



        echo "Pendaftaran anda sedang di proses";
    }
}