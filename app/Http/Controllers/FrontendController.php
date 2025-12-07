<?php

namespace App\Http\Controllers;

use App\Models\HostingPackage;
use App\Models\Banner; // Tambahkan Model Banner untuk logo/ikon
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function index()
    {
        // Untuk saat ini, kita hanya me-load view statis.
        // Kita akan tambahkan logic data di langkah selanjutnya.
        return view('frontend.homepage'); 
    }
   
}