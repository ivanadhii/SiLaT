<?php
namespace App\Models;

use CodeIgniter\Model;

class OrganisasiModel extends Model
{
    protected $table = 'organisasi';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'unit_kerja',
        'sub_unit_kerja',
        'tanggal_submit',

        // Tata Kelola SPBE
        'dokumen_rencana_spbe',
        'dokumen_rencana_spbe_justifikasi',
        'dokumen_kebijakan_spbe',
        'dokumen_kebijakan_spbe_justifikasi',
        'dokumen_sop_spbe',
        'dokumen_sop_spbe_justifikasi',

        // Kompetensi SDM
        'anggaran_sdm_spbe',
        'anggaran_sdm_spbe_justifikasi',
        'sdm_khusus_spbe',
        'sdm_khusus_spbe_justifikasi',

        // Anggaran
        'anggaran_dialokasikan',
        'anggaran_dialokasikan_justifikasi',
        'anggaran_penambahan',
        'anggaran_penambahan_justifikasi',
        'anggaran_pengurangan',
        'anggaran_pengurangan_justifikasi'
    ];
}
