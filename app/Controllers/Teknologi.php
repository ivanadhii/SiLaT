<?php
namespace App\Controllers;

use App\Models\TeknologiModel;
use App\Models\UnitKerjaModel;
use CodeIgniter\Controller;

class Teknologi extends Controller
{
    public function form()
    {
        $unitModel = new UnitKerjaModel();

        $data['unit_kerja'] = $unitModel->select('unit_kerja')->distinct()->findAll();
        $data['sub_unit_kerja'] = $unitModel->findAll();

        return view('form_teknologi', $data);
    }

    public function submit()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'unit_kerja'             => 'required',
            'sub_unit_kerja'         => 'required',
            'tanggal_submit'         => 'required',

            // INTERNET
            'bandwidth_sistem'       => 'required',
            'bandwidth_justifikasi'  => 'required',
            'topologi_jaringan'      => 'required',
            'topologi_justifikasi'   => 'required',
            'jadwal_backup'          => 'required',
            'backup_justifikasi'     => 'required',
            'manajemen_akses'        => 'required',
            'akses_justifikasi'      => 'required',

            // MANAJEMEN INSIDEN INTERNET
            'insiden_pencatatan'               => 'required',
            'insiden_pencatatan_justifikasi'   => 'required',
            'insiden_tindaklanjut'             => 'required',
            'insiden_tindaklanjut_justifikasi' => 'required',

            // ASET TIK
            'aset_tik_nilai'         => 'required|numeric',
            'aset_tik_justifikasi'   => 'required',

            // INOVASI
            'inovasi_nilai'          => 'required|numeric',
            'inovasi_justifikasi'    => 'required',

            // KEAMANAN INFORMASI
            'va_penetration_testing'         => 'required',
            'va_testing_justifikasi'         => 'required',
            'va_tindaklanjut'               => 'required',
            'va_tindaklanjut_justifikasi'   => 'required',
            'panduan_keamanan'              => 'required',
            'panduan_keamanan_justifikasi'  => 'required',
            'manajemen_insiden_siber'       => 'required',
            'manajemen_insiden_justifikasi' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new TeknologiModel();
        $model->save($this->request->getPost());

        return redirect()->to('/teknologi/form')->with('success', 'Form Teknologi berhasil dikirim');
    }
}
