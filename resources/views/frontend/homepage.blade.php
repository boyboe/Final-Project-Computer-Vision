<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penjualan Hosting Terbaik - {{ config('app.name') }}</title>
    </head>
<body>

    @if($main_logo)
        <img src="{{ Storage::url($main_logo->file_path) }}" alt="{{ $main_logo->asset_name }}" style="max-height: 50px;">
    @endif
    
    <h1>Pilih Paket Hosting Anda</h1>
    
    <div class="package-container" style="display: flex; gap: 20px;">
        
        @foreach($packages as $package)
            <div class="package-card" style="border: 1px solid #ccc; padding: 20px; width: 300px;">
                
                <h2>{{ $package->name }}</h2>
                
                {{-- <img src="{{ Storage::url($package->assets->where('type', 'package_icon')->first()->file_path ?? 'default.png') }}" alt="Icon" style="height: 50px;"> --}}

                <p>Harga Mulai:</p>
                
                {{-- Tampilkan Opsi Harga 1 Bulan --}}
                <p><strong>1 Bulan:</strong> Rp{{ number_format($package->price_1_month, 0, ',', '.') }}</p>
                
                {{-- Tampilkan Opsi Harga 2 Bulan (Disarankan untuk target Rp350k) --}}
                <p><strong>2 Bulan:</strong> Rp{{ number_format($package->price_2_months, 0, ',', '.') }}</p>
                
                <hr>
                
                <p><strong>Fitur Utama:</strong></p>
                <ul>
                    <li>{{ $package->storage_gb }} GB SSD NVMe Storage</li>
                    <li>{{ $package->ram_gb }} GB RAM</li>
                    <li>{{ $package->cpu_cores }} CPU Cores</li>
                    <li>Gratis Setup Database</li>
                </ul>

                <a href="{{ route('order.whatsapp', ['packageId' => $package->id, 'duration' => 2]) }}" 
                   target="_blank" 
                   style="display: block; background-color: green; color: white; padding: 10px; text-align: center; margin-top: 15px; text-decoration: none;">
                   Pesan Sekarang (2 Bulan)
                </a>
            </div>
        @endforeach
        </div>

</body>
</html>