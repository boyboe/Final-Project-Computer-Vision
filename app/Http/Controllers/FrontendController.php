<?php

namespace App\Http\Controllers;

use App\Models\HostingPackage;
use App\Models\Banner; // Tambahkan Model Banner untuk logo/ikon
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        // 1. Ambil semua paket hosting
        $packages = HostingPackage::orderBy('price_1_month', 'asc')->get();

        // 2. Ambil aset visual (logo, ikon, dsb.)
        // Contoh: Ambil logo utama
        $main_logo = Banner::where('type', 'logo')->first();
        
        // 3. Kirim data ke view
        return view('frontend.homepage', compact('packages', 'main_logo'));
    }

   


    public function orderViaWhatsapp(Request $request, $packageId, $duration)
    {
    // Ambil detail paket dari database
    $package = HostingPackage::findOrFail($packageId);
    
    // Tentukan harga berdasarkan durasi
    $price = ($duration == 2) ? $package->price_2_months : $package->price_1_month;
    $totalAmount = number_format($price, 0, ',', '.');
    
    // Nomor WhatsApp CS Anda (Ganti dengan nomor Anda!)
    $whatsappNumber = "6281234567890"; 

    // Template Pesan Otomatis
    $message = "Assalamualaikum. \nSaya *{$request->input('customer_name', 'customer baru')}* tertarik untuk memesan Paket Hosting berikut:\n\n";
    $message .= "• Paket: *{$package->name}*\n";
    $message .= "• Durasi: *{$duration} Bulan*\n";
    $message .= "• Total Biaya: *Rp{$totalAmount}*\n\n";
    $message .= "Mohon bantuan untuk proses pembayarannya. Terima kasih.";
    
    // Encode pesan untuk URL
    $encodedMessage = urlencode($message);
    
    // Redirect ke link WhatsApp
    return redirect()->away("https://wa.me/{$whatsappNumber}?text={$encodedMessage}");
}
}