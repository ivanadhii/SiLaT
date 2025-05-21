<?php
namespace App\Controllers;

use App\Models\DataModel;
use App\Models\UnitKerjaModel;
use CodeIgniter\Controller;

class Data extends Controller
{
    public function form()
    {
        $unitModel = new UnitKerjaModel();

        $data['unit_kerja'] = $unitModel->select('unit_kerja')->distinct()->findAll();
        $data['sub_unit_kerja'] = $unitModel->findAll();

        return view('form_data', $data);
    }

    public function submit()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'unit_kerja' => 'required',
            'sub_unit_kerja' => 'required',
            'tanggal_submit' => 'required',

            'standar_data' => 'required',
            'standar_data_justifikasi' => 'required',
            'basis_data' => 'required',
            'basis_data_justifikasi' => 'required',
            'aplikasi_informasi' => 'required',
            'aplikasi_informasi_justifikasi' => 'required',

            'publikasi_data_nilai' => 'required|numeric',
            'publikasi_data_justifikasi' => 'required',

            'integrasi_data_nilai' => 'required|numeric',
            'integrasi_data_justifikasi' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new DataModel();
        $model->save($this->request->getPost());

        return redirect()->to('/data/form')->with('success', 'Form Data berhasil dikirim');
    }
}
