<?php
namespace App\Controllers;

use App\Models\UnitKerjaModel;
use CodeIgniter\Controller;

class AdminUnitKerja extends Controller
{
    public function index()
    {
        $model = new UnitKerjaModel();
        $data['unit_kerja'] = $model->findAll();
        return view('admin_unitkerja_form', $data);
    }

    public function save()
    {
        $model = new UnitKerjaModel();

        $data = [
            'unit_kerja'     => $this->request->getPost('unit_kerja'),
            'sub_unit_kerja' => $this->request->getPost('sub_unit_kerja'),
        ];

        $model->save($data);
        return redirect()->to('/admin-unitkerja')->with('success', 'Data Unit Kerja & Sub Unit berhasil disimpan');
    }
}
