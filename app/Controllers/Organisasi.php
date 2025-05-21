<?php
namespace App\Controllers;

use App\Models\OrganisasiModel;
use App\Models\UnitKerjaModel;
use CodeIgniter\Controller;

class Organisasi extends Controller
{
    public function form()
    {
        $unitModel = new UnitKerjaModel();

        $data['unit_kerja'] = $unitModel->select('unit_kerja')->distinct()->findAll();
        $data['sub_unit_kerja'] = $unitModel->findAll();

        return view('form_organisasi', $data);
    }

    public function submit()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'unit_kerja' => 'required',
            'sub_unit_kerja' => 'required',
            'tanggal_submit' => 'required',

            'dokumen_rencana_spbe' => 'required',
            'dokumen_rencana_spbe_justifikasi' => 'required',
            'dokumen_kebijakan_spbe' => 'required',
            'dokumen_kebijakan_spbe_justifikasi' => 'required',
            'dokumen_sop_spbe' => 'required',
            'dokumen_sop_spbe_justifikasi' => 'required',

            'anggaran_sdm_spbe' => 'required',
            'anggaran_sdm_spbe_justifikasi' => 'required',
            'sdm_khusus_spbe' => 'required',
            'sdm_khusus_spbe_justifikasi' => 'required',

            'anggaran_dialokasikan' => 'required',
            'anggaran_dialokasikan_justifikasi' => 'required',
            'anggaran_penambahan' => 'required',
            'anggaran_penambahan_justifikasi' => 'required',
            'anggaran_pengurangan' => 'required',
            'anggaran_pengurangan_justifikasi' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new OrganisasiModel();
        $model->save($this->request->getPost());

        return redirect()->to('/organisasi/form')->with('success', 'Form Organisasi berhasil dikirim');
    }
}
