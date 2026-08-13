<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

    protected function projects(): array
    {
         return [
            [
                'slug' => 'project-magang',
                'title' => 'Project Magang',
                'subtitle' => 'Website pelatihan dan Profile Perusahaan — Dinkominfo Surabaya',
                'role' => 'Web Developer Intern',
                'duration' => 'April – Juni 2025',
                'status' => 'Selesai',
                'description' => [
                    'Website company profile untuk BLC Surabaya yang dikembangkan selama program magang di Dinas Komunikasi dan Informatika Kota Surabaya. Aplikasi ini digunakan untuk mencatat kehadiran pengunjung, pendaftaran pelatihan, dan pelaporan aktivitas harian, sehingga mempermudah operasional dan meningkatkan efisiensi pelayanan.',
                    'Saya berperan penuh dalam pengembangan sisi frontend dan backend, mulai dari perancangan basis data, pembuatan fitur booking jadwal pelatihan, hingga dashboard admin untuk manajemen kelas dan peserta.',
                ],
                'tech_stack' => ['Laravel', 'MySQL', 'Tailwind CSS', 'JavaScript', 'Git'],
                'features' => [
                    'Absensi pengunjung digital',
                    'Pendaftaran pelatihan online',
                    'Dashboard laporan aktivitas',
                    'Manajemen jadwal kelas',
                    'Panel admin terpisah',
                ],
                'images' => [
                    ['src' => 'images/projectblc1.png', 'caption' => 'Home'],
                    ['src' => 'images/bukutamu.png', 'caption' => 'Buku Tamu'],
                    ['src' => 'images/InformasiBLC.png', 'caption' => 'Informasi Perusahaan'],
                    ['src' => 'images/Kelas.png', 'caption' => 'Manajemen Kelas'],
                ],
                'source_url' => 'https://github.com/sultonnaim/projectBLC.git',
            ],

            [
                'slug' => 'Project-Kantin-UPNVJT',
                'title' => 'Website Kantin UPNVJT',
                'subtitle' => 'Membuat website pemesanan untuk Kantin UPNVJT - Tugas Akhir',
                'role' => 'Fullstack Web Developer',
                'duration' => 'April – Juni 2026',
                'status' => 'Selesai',
                'description' => [
                    'Website E-Canteen yang dikembangkan sebagai proyek skripsi untuk mendigitalisasi proses pemesanan dan transaksi pada 
                    kantin UPN “Veteran” Jawa Timur. Sistem ini dirancang untuk memudahkan pelanggan dalam mencari menu dan melakukan pemesanan, sekaligus membantu penjual dan administrator dalam mengelola menu, pesanan, transaksi, serta laporan penjualan.'
                    ],
                'tech_stack' => ['Laravel', 'MySQL', 'Tailwind CSS', 'RESTfull API', 'JavaScript', 'Git'],
                'features' => [
                    '3 Role = Customer, Penjual, Superadmin',
                    'Payment Gateway',
                    'Manajemen Menu',
                    'Manajemen Akun Penjual',
                    'Laporan Transaksi',
                    'Diagram Penjualan',
                    'Manajemen Status Pesanan dan Status Delivery',
                    'Live Chat',
                ],
                'images' => [
                    ['src' => 'images/loginkantin.png', 'caption' => 'Login'],
                    ['src' => 'images/historycust.png', 'caption' => 'Riwayat Pesanan Customer'],
                    ['src' => 'images/livechat.png', 'caption' => 'Live Chat Customer dan Penjual'],
                    ['src' => 'images/penjual.png', 'caption' => 'Dashboard Penjual'],
                    ['src' => 'images/menu.png', 'caption' => 'Manajemen Menu'],
                    ['src' => 'images/penjualan.png', 'caption' => 'Laporan Penjualan'],
                    ['src' => 'images/superadmin.png', 'caption' => 'Dashboard Superadmin'],
                    ['src' => 'images/akunpenjual.png', 'caption' => 'Manejemen Akun Penjual'],
                ],
                'source_url' => 'https://github.com/RidoIzril/kantinupn.git',
            ],
            [
                'slug' => 'project-PKL',
                'title' => 'Website Kampung Coding',
                'subtitle' => 'Website Profil Perusahaan dan Manejemen Pelatihan - PT APIGS Indonesia Groups',
                'role' => 'Fullstack Web Developer',
                'duration' => 'Februari - April 2025',
                'status' => 'Selesai',
                'description' => ['
                Website company profile yang dikembangkan untuk PT APIGS Indonesia Groups sebagai media informasi dan representasi digital perusahaan. Website ini menampilkan informasi mengenai profil perusahaan, layanan, serta berbagai informasi terkait kegiatan perusahaan secara lebih profesional dan mudah diakses.
                Selain fitur company profile, website ini dilengkapi dengan sistem pengelolaan pelatihan yang membantu perusahaan dalam mengelola informasi dan kegiatan pelatihan, mulai dari data pelatihan, peserta, hingga informasi terkait kegiatan yang diselenggarakan.
                '],
                'tech_stack' => ['Laravel', 'MySQL', 'Tailwind CSS', 'JavaScript', 'Git', 'Bootstrap'],
                'features' => [
                    '2 Role = Admin dan User',
                    'Informasi Perusahaan',
                    'Pendaftaran Pelatihan',
                    'Testimoni',
                ],
                'images' => [
                    ['src' => 'images/12.png', 'caption' => 'Dashboard'],
                    ['src' => 'images/11.png', 'caption' => 'Login'],
                    ['src' => 'images/13.png', 'caption' => 'Informasi Perusahaan'],
                    ['src' => 'images/14.png', 'caption' => 'Daftar Pelatihan'],
                    ['src' => 'images/15.png', 'caption' => 'Testimonial'],
                    ['src' => 'images/16.png', 'caption' => 'Data Peserta Pelatihan'],
                ],
                'source_url' => 'https://github.com/RidoIzril/Coding-Kid-APIGS.git',
            ],
            [
                'slug' => 'project-SIE',
                'title' => 'Dashboard Tenaga Kerja',
                'subtitle' => 'Data Tenaga Kerja dan Analisis What If  - Sistem Informasi UPNVJT',
                'role' => 'Web Developer',
                'duration' => 'Desember 2025',
                'status' => 'Selesai',
                'description' => ['
                    Sistem Informasi Eksekutif yang menyajikan dashboard analisis data tenaga kerja secara interaktif, dilengkapi fitur drill-down untuk melihat data berdasarkan indikator, kota, 
                    dan tahun serta analisis What-If untuk melakukan simulasi perubahan data dan mendukung pengambilan keputusan.
                '],
                'tech_stack' => ['PHP', 'HTML', 'JavaScript', 'MySQL', 'Spreadsheet'],
                'features' => [
                    'visualisasi data',
                    'Analisis What-If',
                    'Drill-Down Data',
                    'Analisis Berdasarkan Wilayah'
                ],
                'images' => [
                    ['src' => 'images/SIE3.png', 'caption' => 'Dashboard data per indikator'],
                    ['src' => 'images/SIE2.png', 'caption' => 'Grafik data per Wilayah'],
                    ['src' => 'images/SIE.png', 'caption' => 'Data analisis what-if'],
                ],
                'source_url' => 'https://github.com/RidoIzril/Dashboard-SIE-Tenaga-Kerja.git',
            ],
            [
                'slug' => 'project-pakman',
                'title' => 'Pakman',
                'subtitle' => 'Website Game - Sistem Informasi UPNVJT',
                'role' => 'Fullstack Developer',
                'duration' => 'Juni 2024',
                'status' => 'Selesai',
                'description' => ['
                Game arcade bergaya Pac-Man yang mengharuskan pemain mengendalikan karakter untuk mengumpulkan poin di dalam maze 
                sambil menghindari kejaran musuh. Game dilengkapi dengan sistem score, lives, collectible points, dan enemy AI untuk memberikan tantangan selama permainan.
                '],
                'tech_stack' => ['HTML', 'JavaScript'],
                'features' => [
                    'Maze',
                    'Score System',
                    'Lives System',
                    'Musuh AI',
                    'Points',
                    'Pergerakan Pemain'
                ],
                'images' => [
                    ['src' => 'images/pakman.png', 'caption' => 'Game Points'],
                ],
                'source_url' => 'https://github.com/RidoIzril/PAKMAN.git',
            ],
            [
                'slug' => 'project-UIUX',
                'title' => 'Perancangan Sistem Pelaporan Kerusakan Jalan',
                'subtitle' => 'Membuat UI UX - Sistem Informasi UPNVJT',
                'role' => 'Designer',
                'duration' => 'Desember 2023',
                'status' => 'Selesai',
                'description' => ['
                Perancangan UI/UX sistem pelaporan jalan rusak yang memudahkan masyarakat dalam mengirimkan laporan kerusakan 
                jalan serta membantu petugas dalam memantau, memverifikasi, dan mengelola status laporan hingga proses penyelesaian.'
                ],
                'tech_stack' => ['Figma', 'Canva'],
                'features' => [
                    'Pelaporan Jalan',
                    'Monitoring Status',
                    'Verifikasi Laporan',
                    'Penentuan Urgensi',
                    'Laporan Pengaduan',
                ],
                'images' => [
                    ['src' => 'images/uiux.png', 'caption' => 'Dashboard'],
                    ['src' => 'images/uiux1.png', 'caption' => 'Form Pelaporan'],
                    ['src' => 'images/uiux2.png', 'caption' => 'Daftar Pelaporan Masyarakat'],
                    ['src' => 'images/uiux3.png', 'caption' => 'Detail Laporan'],
                    ['src' => 'images/uiux4.png', 'caption' => 'Penentuan Urgensi'],
                    ['src' => 'images/uiux5.png', 'caption' => 'Daftar Laporan Dishub'],
                ],
                'source_url' => '',
            ],
            [
                'slug' => 'project-SIP',
                'title' => 'Sistem Informasi Pemesanan',
                'subtitle' => 'Website pemesanan online - Sistem Informasi UPNVJT',
                'role' => 'Fulstack Web Developer',
                'duration' => 'Juni 2024',
                'status' => 'Selesai',
                'description' => ['
                Website Sistem Informasi Pemesanan yang dirancang untuk mendukung proses pemesanan dan pengelolaan makanan secara terintegrasi. 
                Sistem menyediakan akses bagi kasir untuk melakukan pemesanan, sementara pihak dapur dan admin dapat mengelola pesanan, data pengguna, serta memantau proses pemenuhan pesanan.
                '],
                'tech_stack' => [
                    'PHP',
                    'CSS',
                    'Bootstrap',
                    'MySQL',
                    'Laragon'
                ],
                'features' => [
                    'Pemesanan Online',
                    'Kelola Pesanan',
                    'Manajemen Dapur',
                    'Manajemen User',
                    'Laporan Pesanan'
                ],
                'image' => [
                    ['src' => 'images/SIPUtama.png', 'caption' => 'Feautured'],
                ],
                'source_url' => 'https://github.com/RidoIzril/SIP_PWeb.git',
            ],
            
        ];
    }

    public function show(string $slug)
    {
        $projects = $this->projects();

        $index = collect($projects)->search(fn ($p) => $p['slug'] === $slug);

        if ($index === false) {
            abort(404);
        }

        $project = $projects[$index];

        $total = count($projects);
        $prevProject = $projects[($index - 1 + $total) % $total];
        $nextProject = $projects[($index + 1) % $total];

        return view('partials.projectdetail', [
            'project' => $project,
            'prevProject' => $prevProject,
            'nextProject' => $nextProject,
        ]);
    }
}