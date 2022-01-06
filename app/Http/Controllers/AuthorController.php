<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // Fungsi Ambil Semua Data Artikel Yang Tersimpan

    public function index(){
        $author=Author::all();
        $content=['author'=>$author];
        return $content;
    }

    // Fungsi Buat Artikel Baru

    public function buatartikelbaru(Request $request){
        $author=new Author();
        $author->judulartikel=$request->judulartikel;
        $author->artikel=$request->artikel;
        $author->save();

        return " Artikel Berhasil Dibuat ";
    }

    // Fungsi Update Artikel

    public function updateartikel(Request $request, $id)
    {
        $author=Author::find($id);
        $author->judulartikel=$request->judulartikel;
        $author->artikel=$request->artikel;
        $author->save();

        return " Artikel Berhasil Diupdate ";
    }

    // Fungsi Hapus Artikel

    public function hapusartikel($id)
    {
        $author=Author::find($id);
        $author->delete();

        return " Artikel Berhasil Dihapus ";
    }

    // Fungsi Baca Artikel

    public function detailartikel($id)
    {
        $author=Author::find($id);
        return $author;
    }
}
