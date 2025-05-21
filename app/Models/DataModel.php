<?php
namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    protected $table = 'data';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'unit_kerja',
        'sub_unit_kerja',
        'tanggal_submit',

        'standar_data',
        'standar_data_justifikasi',
        'basis_data',
        'basis_data_justifikasi',
        'aplikasi_informasi',
        'aplikasi_informasi_justifikasi',

        'publikasi_data_nilai',
        'publikasi_data_justifikasi',
        'integrasi_data_nilai',
        'integrasi_data_justifikasi'
    ];
}
