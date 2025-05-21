
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian Unit Kerja</title>
    <style>
        :root {
            --primary-color: #3498db;
            --primary-dark: #2980b9;
            --secondary-color: #2c3e50;
            --light-bg: #eef2f5;
            --white: #ffffff;
            --border-color: #dce4ec;
            --success-color: #2ecc71;
            --error-color: #e74c3c;
            --gray-light: #ecf0f1;
            --gray: #95a5a6;
            --gray-dark: #7f8c8d;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: var(--light-bg);
            padding: 30px;
            color: var(--secondary-color);
            line-height: 1.6;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        h2 {
            color: var(--secondary-color);
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        h3 {
            color: var(--primary-color);
            font-size: 20px;
            margin: 25px 0 15px 0;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .breadcrumb {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding: 12px 15px;
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .breadcrumb-item {
            display: flex;
            align-items: center;
            color: var(--gray-dark);
            font-size: 14px;
            font-weight: 500;
        }
        
        .breadcrumb-item a {
            color: var(--primary-color);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .breadcrumb-item a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .breadcrumb-separator {
            margin: 0 10px;
            color: var(--gray);
        }
        
        form {
            background-color: var(--white);
            padding: 30px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            margin-top: 20px;
        }
        
        .form-section {
            background-color: var(--white);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid var(--primary-color);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary-color);
        }
        
        input[type="text"],
        input[type="date"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 15px;
            transition: var(--transition);
            background-color: var(--light-bg);
        }
        
        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }
        
        textarea {
            height: 100px;
            resize: vertical;
        }
        
        button {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
        }
        
        button:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .success-message {
            background-color: rgba(46, 204, 113, 0.1);
            color: var(--success-color);
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            text-align: center;
            border-left: 4px solid var(--success-color);
        }
        
        .error-message {
            background-color: rgba(231, 76, 60, 0.1);
            color: var(--error-color);
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border-left: 4px solid var(--error-color);
        }
        
        ul.error-message {
            list-style: none;
            padding: 15px;
        }
        
        ul.error-message li {
            margin-bottom: 5px;
        }
        
        ul.error-message li:last-child {
            margin-bottom: 0;
        }
        
        .nilai-group {
            background-color: var(--gray-light);
            padding: 15px;
            border-radius: 6px;
            margin-top: 10px;
        }
        
        .nilai-label {
            font-weight: 600;
            color: var(--secondary-color);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }
            
            form {
                padding: 20px;
            }
            
            h2 {
                font-size: 24px;
            }
            
            h3 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="breadcrumb">
            <div class="breadcrumb-item">
                <a href="<?= site_url('/dashboard') ?>">Dashboard</a>
            </div>
            <div class="breadcrumb-separator">
                <i>›</i>
            </div>
            <div class="breadcrumb-item">
                Form Penilaian Unit Kerja
            </div>
        </div>
        
        <div class="header">
            <h2>Form Penilaian Unit Kerja</h2>
        </div>
        
        <?php if(session()->getFlashdata('success')): ?>
            <div class="success-message"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>
        
        <?php if(session()->getFlashdata('errors')): ?>
            <ul class="error-message">
                <?php foreach(session()->getFlashdata('errors') as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        
        <form action="" method="post">
            <div class="form-group">
                <label for="unit_kerja">Unit Kerja:</label>
                <select id="unit_kerja" name="unit_kerja" required>
                    <option value="">-- Pilih Unit Kerja --</option>
                    <?php foreach ($unit_kerja as $uk): ?>
                        <option value="<?= $uk['unit_kerja'] ?>"><?= $uk['unit_kerja'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-group">
                <label for="sub_unit_kerja">Sub Unit Kerja:</label>
                <select id="sub_unit_kerja" name="sub_unit_kerja" required>
                    <option value="">-- Pilih Sub Unit Kerja --</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="tanggal_submit">Tanggal Submit:</label>
                <input type="date" id="tanggal_submit" name="tanggal_submit">
            </div>
            
            <!-- Penggunaan Email PUPR -->
            <h3>Penggunaan Email PUPR</h3>
            <div class="form-group">
                <label for="email_justifikasi">Justifikasi:</label>
                <textarea id="email_justifikasi" name="email_justifikasi"></textarea>
            </div>
            
            <div class="form-group">
                <label for="email_pegawai">Pegawai yang memiliki email PUPR:</label>
                <input type="text" id="email_pegawai" name="email_pegawai">
            </div>
            
            <div class="form-group nilai-group">
                <label class="nilai-label" for="email_nilai">Diisi tim penilai:</label>
                <input type="number" id="email_nilai" name="email_nilai" min="0" max="100">
            </div>
            
            <!-- Penggunaan Workspace M365 -->
            <h3>Penggunaan Workspace M365 untuk Bekerja</h3>
            <div class="form-group">
                <label for="workspace_justifikasi">Justifikasi:</label>
                <textarea id="workspace_justifikasi" name="workspace_justifikasi"></textarea>
            </div>
            
            <div class="form-group">
                <label for="workspace_pengguna">Pengguna Workspace M.365:</label>
                <input type="text" id="workspace_pengguna" name="workspace_pengguna">
            </div>
            
            <div class="form-group nilai-group">
                <label class="nilai-label" for="workspace_nilai">Diisi tim penilai:</label>
                <input type="number" id="workspace_nilai" name="workspace_nilai" min="0" max="100">
            </div>
            
            <!-- Pegawai yang menggunakan TNDE -->
            <h3>Pegawai yang menggunakan TNDE</h3>
            <div class="form-group nilai-group">
                <label class="nilai-label" for="tnde_nilai">Diisi Tim Penilai:</label>
                <input type="number" id="tnde_nilai" name="tnde_nilai" min="0" max="100">
            </div>
            
            <div class="form-group">
                <label for="tnde_justifikasi">Justifikasi:</label>
                <textarea id="tnde_justifikasi" name="tnde_justifikasi"></textarea>
            </div>
            
            <div class="form-group">
                <label for="tnde_persen">Persentase (3%):</label>
                <input type="number" id="tnde_persen" name="tnde_persen" min="0" step="0.01">
            </div>
            
            <div class="form-group">
                <label for="tnde_jumlah_user">Jumlah User:</label>
                <input type="number" id="tnde_jumlah_user" name="tnde_jumlah_user" min="0">
            </div>
            
            <div class="form-group">
                <label for="tnde_total_pegawai">Total Pegawai:</label>
                <input type="number" id="tnde_total_pegawai" name="tnde_total_pegawai" min="0">
            </div>
            
            <div class="form-group nilai-group">
                <label class="nilai-label" for="tndee_nilai">Diisi Tim Penilai:</label>
                <input type="number" id="tndee_nilai" name="tndee_nilai" min="0" max="100">
            </div>
            
            <div class="form-group">
                <label for="tnde_rincian_justifikasi">Justifikasi Rincian:</label>
                <textarea id="tnde_rincian_justifikasi" name="tnde_rincian_justifikasi"></textarea>
            </div>
            
            <div class="form-group">
                <label for="tnde_aktivitas">Aktivitas Pegawai Menggunakan TNDE:</label>
                <textarea id="tnde_aktivitas" name="tnde_aktivitas"></textarea>
            </div>
            
            <!-- Penggunaan Tanda Tangan Elektronik -->
            <h3>Penggunaan Tanda Tangan Elektronik</h3>
            <div class="form-group nilai-group">
                <label class="nilai-label" for="tte_nilai_1">Diisi Tim Penilai:</label>
                <input type="number" id="tte_nilai_1" name="tte_nilai_1" min="0" max="100">
            </div>
            
            <div class="form-group">
                <label for="tte_justifikasi_1">Justifikasi / Catatan Penilai:</label>
                <textarea id="tte_justifikasi_1" name="tte_justifikasi_1"></textarea>
            </div>
            
            <div class="form-group">
                <label for="tte_pejabat_pengguna">Pejabat yang menggunakan TTE (Barcode):</label>
                <input type="text" id="tte_pejabat_pengguna" name="tte_pejabat_pengguna">
            </div>
            
            <div class="form-group nilai-group">
                <label class="nilai-label" for="tte_nilai_2">Diisi Tim Penilai:</label>
                <input type="number" id="tte_nilai_2" name="tte_nilai_2" min="0" max="100">
            </div>
            
            <div class="form-group">
                <label for="tte_justifikasi_2">Justifikasi / Catatan Penilai:</label>
                <textarea id="tte_justifikasi_2" name="tte_justifikasi_2"></textarea>
            </div>
            
            <div class="form-group">
                <label for="tte_log_aktivitas">Log Aktivitas penggunaan TTE (Barcode):</label>
                <input type="number" id="tte_log_aktivitas" name="tte_log_aktivitas" min="0">
            </div>
            
            <!-- Penggunaan Bravo -->
            <h3>Penggunaan Bravo</h3>
            <div class="form-group nilai-group">
                <label class="nilai-label" for="bravo_nilai_1">Diisi Tim Penilai:</label>
                <input type="number" id="bravo_nilai_1" name="bravo_nilai_1" min="0" max="100">
            </div>
            
            <div class="form-group">
                <label for="bravo_justifikasi_1">Justifikasi / Catatan Penilai:</label>
                <textarea id="bravo_justifikasi_1" name="bravo_justifikasi_1"></textarea>
            </div>
            
            <div class="form-group">
                <label for="bravo_fitur_dispensasi">Fitur dispensasi & dinas & cuti yang digunakan:</label>
                <input type="text" id="bravo_fitur_dispensasi" name="bravo_fitur_dispensasi">
            </div>
            
            <div class="form-group nilai-group">
                <label class="nilai-label" for="bravo_nilai_2">Diisi Tim Penilai:</label>
                <input type="number" id="bravo_nilai_2" name="bravo_nilai_2" min="0" max="100">
            </div>
            
            <div class="form-group">
                <label for="bravo_justifikasi_2">Justifikasi / Catatan Penilai:</label>
                <textarea id="bravo_justifikasi_2" name="bravo_justifikasi_2"></textarea>
            </div>
            
            <div class="form-group">
                <label for="bravo_unor_pengguna">Unor sudah menggunakan Bravo:</label>
                <input type="text" id="bravo_unor_pengguna" name="bravo_unor_pengguna">
            </div>
            
            <div class="form-group nilai-group">
                <label class="nilai-label" for="bravo_nilai_3">Diisi Tim Penilai:</label>
                <input type="number" id="bravo_nilai_3" name="bravo_nilai_3" min="0" max="100">
            </div>
            
            <div class="form-group">
                <label for="bravo_justifikasi_3">Justifikasi / Catatan Penilai:</label>
                <textarea id="bravo_justifikasi_3" name="bravo_justifikasi_3"></textarea>
            </div>
            
            <div class="form-group">
                <label for="bravo_pengelola">Jumlah (Admin) Pengelola Bravo:</label>
                <input type="number" id="bravo_pengelola" name="bravo_pengelola" min="0">
            </div>
            
            <div class="form-group nilai-group">
                <label class="nilai-label" for="bravo_nilai_4">Diisi Tim Penilai:</label>
                <input type="number" id="bravo_nilai_4" name="bravo_nilai_4" min="0" max="100">
            </div>
            
            <div class="form-group">
                <label for="bravo_justifikasi_4">Justifikasi / Catatan Penilai:</label>
                <textarea id="bravo_justifikasi_4" name="bravo_justifikasi_4"></textarea>
            </div>
            
            <div class="form-group">
                <label for="bravo_pengajuan_dispensasi">Pengajuan dispensasi pribadi/admin:</label>
                <input type="text" id="bravo_pengajuan_dispensasi" name="bravo_pengajuan_dispensasi">
            </div>
            
            <div class="form-group nilai-group">
                <label class="nilai-label" for="bravo_nilai_5">Diisi Tim Penilai:</label>
                <input type="number" id="bravo_nilai_5" name="bravo_nilai_5" min="0" max="100">
            </div>
            
            <div class="form-group">
                <label for="bravo_justifikasi_5">Justifikasi / Catatan Penilai:</label>
                <textarea id="bravo_justifikasi_5" name="bravo_justifikasi_5"></textarea>
            </div>
            
            <div class="form-group">
                <label for="bravo_koordinat">Kesesuaian titik koordinat sesuai lokasi kantor atau tidak:</label>
                <input type="text" id="bravo_koordinat" name="bravo_koordinat">
            </div>
            
            <div class="form-group nilai-group">
                <label class="nilai-label" for="bravo_nilai_6">Diisi Tim Penilai:</label>
                <input type="number" id="bravo_nilai_6" name="bravo_nilai_6" min="0" max="100">
            </div>
            
            <div class="form-group">
                <label for="bravo_justifikasi_6">Justifikasi / Catatan Penilai:</label>
                <textarea id="bravo_justifikasi_6" name="bravo_justifikasi_6"></textarea>
            </div>
            
            <div class="form-group">
                <label for="bravo_laporan_monitoring">Ketersediaan laporan bulanan monitoring absen:</label>
                <input type="text" id="bravo_laporan_monitoring" name="bravo_laporan_monitoring">
            </div>
            
            <!-- Pemanfaatan TIK -->
            <h3>Pemanfaatan TIK dalam mendukung pekerjaan perkantoran</h3>
            <div class="form-group">
                <label for="tik_justifikasi">Justifikasi:</label>
                <textarea id="tik_justifikasi" name="tik_justifikasi"></textarea>
            </div>
            
            <div class="form-group nilai-group">
                <label class="nilai-label" for="tik_nilai">Diisi tim penilai:</label>
                <input type="number" id="tik_nilai" name="tik_nilai" min="0" max="100">
            </div>
            
            <button type="submit">Kirim</button>
        </form>
    </div>

    <script>
        const subUnitData = <?= json_encode($sub_unit_kerja) ?>;

        document.getElementById('unit_kerja').addEventListener('change', function () {
            const selectedUnit = this.value;
            const subUnitDropdown = document.getElementById('sub_unit_kerja');
            
            // Kosongkan subunit dulu
            subUnitDropdown.innerHTML = '<option value="">-- Pilih Sub Unit Kerja --</option>';
            
            // Filter dan tambahkan subunit sesuai unit kerja yang dipilih
            subUnitData.forEach(function (item) {
                if (item.unit_kerja === selectedUnit) {
                    const opt = document.createElement('option');
                    opt.value = item.sub_unit_kerja;
                    opt.textContent = item.sub_unit_kerja;
                    subUnitDropdown.appendChild(opt);
                }
            });
        });
    </script>
</body>
</html>