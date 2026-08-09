<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Sumber data project.
     * Untuk sekarang disimpan statis di sini supaya cepat dipakai.
     * Kalau nanti mau dinamis dari database, tinggal ganti method ini
     * jadi Project::all() (setelah bikin model + migration + seeder).
     */
    protected function projects(): array
    {
        return [
            [
                'slug' => 'internship-project',
                'title' => 'Internship Project',
                'subtitle' => 'Attendance and Training Website — Dinkominfo Surabaya',
                'role' => 'Fullstack Web Developer Intern',
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
                ],
                'image' => 'images/projectblc.png',
                'gallery' => [
                    ['src' => 'images/projectblc1.png', 'caption' => 'Beranda'],
                    ['src' => 'images/bukutamu.png', 'caption' => 'Buku Tamu'],
                    ['src' => 'images/InformasiBLC.png', 'caption' => 'Informasi Perusahaan'],
                    ['src' => 'images/Kelas.png', 'caption' => 'Manajemen Kelas'],
                ],
                'source_url' => 'https://github.com/sultonnaim/projectBLC.git',
            ],

            [
                'slug' => 'Project-Kantin-UPNVJT',
                'title' => 'Website Kantin UPNVJT',
                'subtitle' => 'Membuat website pemesanan untuk Kantin UPNVJT',
                'role' => 'Fullstack Web Developer',
                'duration' => 'April – Juni 2026',
                'status' => 'Selesai',
                'description' => ['Deskripsi lengkap project 2.'],
                'tech_stack' => [],
                'features' => [],
                'image' => 'images/kantincust.png',
                'gallery' => [
                    ['src' => 'images/loginkantin.png', 'caption' => 'Login'],
                    ['src' => 'images/historycust.png', 'caption' => 'Riwayat Pesanan Customer'],
                    ['src' => 'images/livechat.png', 'caption' => 'Live Chat Customer dan Penjual'],
                    ['src' => 'images/penjual.png', 'caption' => 'Dashboard Penjual'],
                    ['src' => 'images/menu.png', 'caption' => 'Manajemen Menu'],
                    ['src' => 'images/penjualan.png', 'caption' => 'Laporan Penjualan'],
                    ['src' => 'images/superadmin.png', 'caption' => 'Dashboard Superadmin'],
                    ['src' => 'images/akunpenjual.png', 'caption' => 'Manejemen Akun Penjual'],
                ],
                'source_url' => '#',
            ],
            [
                'slug' => 'project-3',
                'title' => 'Project 3',
                'subtitle' => 'Deskripsi singkat project 3',
                'role' => '-',
                'duration' => '-',
                'status' => 'Selesai',
                'description' => ['Deskripsi lengkap project 3.'],
                'tech_stack' => [],
                'features' => [],
                'image' => 'images/SIPUtama.png',
                'gallery' => [],
                'live_url' => '#',
                'source_url' => '#',
            ],
            [
                'slug' => 'project-4',
                'title' => 'Project 4',
                'subtitle' => 'Deskripsi singkat project 4',
                'role' => '-',
                'duration' => '-',
                'status' => 'Selesai',
                'description' => ['Deskripsi lengkap project 4.'],
                'tech_stack' => [],
                'features' => [],
                'image' => 'images/projects/project4.png',
                'gallery' => [],
                'live_url' => '#',
                'source_url' => '#',
            ],
            [
                'slug' => 'project-5',
                'title' => 'Project 5',
                'subtitle' => 'Deskripsi singkat project 5',
                'role' => '-',
                'duration' => '-',
                'status' => 'Selesai',
                'description' => ['Deskripsi lengkap project 5.'],
                'tech_stack' => [],
                'features' => [],
                'image' => 'images/projects/project5.png',
                'gallery' => [],
                'live_url' => '#',
                'source_url' => '#',
            ],
            [
                'slug' => 'project-6',
                'title' => 'Project 6',
                'subtitle' => 'Deskripsi singkat project 6',
                'role' => '-',
                'duration' => '-',
                'status' => 'Selesai',
                'description' => ['Deskripsi lengkap project 6.'],
                'tech_stack' => [],
                'features' => [],
                'image' => 'images/projects/project6.png',
                'gallery' => [],
                'live_url' => '#',
                'source_url' => '#',
            ],
            [
                'slug' => 'project-7',
                'title' => 'Project 7',
                'subtitle' => 'Deskripsi singkat project 7',
                'role' => '-',
                'duration' => '-',
                'status' => 'Selesai',
                'description' => ['Deskripsi lengkap project 7.'],
                'tech_stack' => [],
                'features' => [],
                'image' => 'images/projects/project7.png',
                'gallery' => [],
                'live_url' => '#',
                'source_url' => '#',
            ],
            [
                'slug' => 'project-8',
                'title' => 'Project 8',
                'subtitle' => 'Deskripsi singkat project 8',
                'role' => '-',
                'duration' => '-',
                'status' => 'Selesai',
                'description' => ['Deskripsi lengkap project 8.'],
                'tech_stack' => [],
                'features' => [],
                'image' => 'images/projects/project8.png',
                'gallery' => [],
                'live_url' => '#',
                'source_url' => '#',
            ],
        ];
    }

    /**
     * Tampilkan halaman detail satu project berdasarkan slug,
     * sekaligus siapkan data project sebelumnya & berikutnya untuk navigasi bawah.
     */
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