<?php
// File: app/Controllers/Penilaian.php
namespace App\Controllers;
use App\Models\PenilaianModel;
use CodeIgniter\Controller;
use App\Models\UnitKerjaModel;

class Penilaian extends Controller
{
public function form()
{
    $model = new UnitKerjaModel();

    // Ambil unit kerja unik saja (tanpa duplikat)
    $data['unit_kerja'] = $model->select('unit_kerja')->distinct()->findAll();

    // Ambil semua sub unit kerja (nanti digunakan oleh JS)
    $data['sub_unit_kerja'] = $model->findAll();

    return view('penilaian_form', $data);
}


public function submit()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'unit_kerja' => 'required',
            'sub_unit_kerja' => 'required',
            'tanggal_submit' => 'required',

            // Email PUPR
            'email_justifikasi' => 'required',
            'email_pegawai' => 'required',
            'email_nilai' => 'required|numeric',

            // Workspace
            'workspace_justifikasi' => 'required',
            'workspace_pengguna' => 'required',
            'workspace_nilai' => 'required|numeric',

            // TNDE
            'tnde_nilai' => 'required|numeric',
            'tnde_justifikasi' => 'required',
            'tnde_persen' => 'required|numeric',
            'tnde_jumlah_user' => 'required|integer',
            'tnde_total_pegawai' => 'required|integer',
            'tndee_nilai' => 'required|numeric',
            'tnde_rincian_justifikasi' => 'required',
            'tnde_aktivitas' => 'required',

            // TTE
            'tte_nilai_1' => 'required|numeric',
            'tte_justifikasi_1' => 'required',
            'tte_pejabat_pengguna' => 'required',
            'tte_nilai_2' => 'required|numeric',
            'tte_justifikasi_2' => 'required',
            'tte_log_aktivitas' => 'required|numeric',

            // Bravo
            'bravo_nilai_1' => 'required|numeric',
            'bravo_justifikasi_1' => 'required',
            'bravo_fitur_dispensasi' => 'required',
            'bravo_nilai_2' => 'required|numeric',
            'bravo_justifikasi_2' => 'required',
            'bravo_unor_pengguna' => 'required',
            'bravo_nilai_3' => 'required|numeric',
            'bravo_justifikasi_3' => 'required',
            'bravo_pengelola' => 'required|integer',
            'bravo_nilai_4' => 'required|numeric',
            'bravo_justifikasi_4' => 'required',
            'bravo_pengajuan_dispensasi' => 'required',
            'bravo_nilai_5' => 'required|numeric',
            'bravo_justifikasi_5' => 'required',
            'bravo_koordinat' => 'required',
            'bravo_nilai_6' => 'required|numeric',
            'bravo_justifikasi_6' => 'required',
            'bravo_laporan_monitoring' => 'required',

            // TIK
            'tik_justifikasi' => 'required',
            'tik_nilai' => 'required|numeric'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new PenilaianModel();
        $model->save($this->request->getPost());

        return redirect()->to('/penilaian/form')->with('success', 'Penilaian berhasil dikirim');
    }
}
