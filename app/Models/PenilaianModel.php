<?php
namespace App\Models;
use CodeIgniter\Model;

class PenilaianModel extends Model
{
    protected $table = 'penilaian';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'unit_kerja',
        'sub_unit_kerja',
        'tanggal_submit',

        // Email PUPR
        'email_justifikasi',
        'email_pegawai',
        'email_nilai',

        // Workspace M365
        'workspace_justifikasi',
        'workspace_pengguna',
        'workspace_nilai',

        // TNDE
        'tnde_nilai',
        'tnde_justifikasi',
        'tnde_persen',
        'tnde_jumlah_user',
        'tnde_total_pegawai',
        'tndee_nilai',  // typo name field di form kamu
        'tnde_rincian_justifikasi',
        'tnde_aktivitas',

        // TTE
        'tte_nilai_1',
        'tte_justifikasi_1',
        'tte_pejabat_pengguna',
        'tte_nilai_2',
        'tte_justifikasi_2',
        'tte_log_aktivitas',

        // Bravo
        'bravo_nilai_1',
        'bravo_justifikasi_1',
        'bravo_fitur_dispensasi',
        'bravo_nilai_2',
        'bravo_justifikasi_2',
        'bravo_unor_pengguna',
        'bravo_nilai_3',
        'bravo_justifikasi_3',
        'bravo_pengelola',
        'bravo_nilai_4',
        'bravo_justifikasi_4',
        'bravo_pengajuan_dispensasi',
        'bravo_nilai_5',
        'bravo_justifikasi_5',
        'bravo_koordinat',
        'bravo_nilai_6',
        'bravo_justifikasi_6',
        'bravo_laporan_monitoring',

        // TIK
        'tik_justifikasi',
        'tik_nilai'
    ];
}
