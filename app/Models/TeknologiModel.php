<?php
namespace App\Models;

use CodeIgniter\Model;

class TeknologiModel extends Model
{
    protected $table = 'teknologi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'unit_kerja',
        'sub_unit_kerja',
        'tanggal_submit',

        // Internet
        'bandwidth_sistem',
        'bandwidth_justifikasi',
        'topologi_jaringan',
        'topologi_justifikasi',
        'jadwal_backup',
        'backup_justifikasi',
        'manajemen_akses',
        'akses_justifikasi',

        // Manajemen Insiden Internet
        'insiden_pencatatan',
        'insiden_pencatatan_justifikasi',
        'insiden_tindaklanjut',
        'insiden_tindaklanjut_justifikasi',

        // Aset TIK
        'aset_tik_nilai',
        'aset_tik_justifikasi',

        // Inovasi
        'inovasi_nilai',
        'inovasi_justifikasi',

        // Keamanan Informasi
        'va_penetration_testing',
        'va_testing_justifikasi',
        'va_tindaklanjut',
        'va_tindaklanjut_justifikasi',
        'panduan_keamanan',
        'panduan_keamanan_justifikasi',
        'manajemen_insiden_siber',
        'manajemen_insiden_justifikasi'
    ];
}
