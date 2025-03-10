<?php
 use Carbon\Carbon;
use Carbon\CarbonPeriod;

if (! function_exists('custom_function')) {
    function findEndDate($startDate, $numWorkDays) {
        // Set zona waktu ke Waktu Indonesia Barat (WIB)
        date_default_timezone_set('Asia/Jakarta');
        
        $currentDate = new DateTime($startDate); // Menginisialisasi tanggal awal
        $countWorkDays = 0; // Variabel untuk menghitung jumlah hari kerja
        
        // Iterasi sampai jumlah hari kerja mencapai numWorkDays
        while ($countWorkDays < $numWorkDays) {
            // Tambah 1 hari ke tanggal saat ini
            $currentDate->modify('+1 day');
            
            // Periksa apakah hari ini bukan Sabtu (6) atau Minggu (7)
            if ($currentDate->format('N') < 6) {
                $countWorkDays++; // Jika hari kerja, tambahkan ke jumlah hari kerja
            }
        }
        
        return $currentDate->format('Y-m-d'); // Kembalikan tanggal akhir cuti
    }
    
  
}

if (! function_exists('another_helper_function')) {
    // use Carbon\Carbon;

     function calculateWorkingDaysDifference($startDate, $endDate)
    {
        // Konversi tanggal ke objek Carbon
        $carbonStartDate = Carbon::parse($startDate);
        $carbonEndDate = Carbon::parse($endDate);
    
        // Hitung selisih hari dengan menggunakan diffInDays
        $days_difference = $carbonStartDate->diffInDays($carbonEndDate);
    
        // Iterasi untuk menghitung hari Sabtu dan Minggu di antara dua tanggal
        $weekend_count = -1;
        for ($i = 0; $i <= $days_difference; $i++) {
            $current_day = $carbonStartDate->copy()->addDays($i)->dayOfWeek;
            // Jika hari adalah Sabtu (6) atau Minggu (0), tambahkan ke count weekend
            if ($current_day == Carbon::SATURDAY || $current_day == Carbon::SUNDAY) {
                $weekend_count++;
            }
        }
    
        // Kurangi hari weekend dari selisih hari
        $working_days_difference = $days_difference - $weekend_count;
    
        return $working_days_difference;
    }
}

// Definisikan fungsi-fungsi bantuan lainnya sesuai kebutuhan
