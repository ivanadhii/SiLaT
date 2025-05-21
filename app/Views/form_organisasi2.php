<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Organisasi</title>
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
        
        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 18px;
            background-color: var(--gray);
            color: var(--white);
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }
        
        .back-button:hover {
            background-color: var(--gray-dark);
            transform: translateY(-2px);
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
        <a href="<?= site_url('/dashboard') ?>" class="back-button">← Kembali ke Dashboard</a>
        
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

    <!-- Subjek Tata Kelola SPBE -->
    <h3>Tata Kelola SPBE</h3>

    <label>Dokumen Rencana Strategis dan Target SPBE yang Sudah Disahkan:</label>
    <input type="text" name="dokumen_rencana_spbe">
    <label>Justifikasi / Catatan Penilai:</label>
    <textarea name="dokumen_rencana_spbe_justifikasi"></textarea>

    <label>Dokumen Kebijakan SPBE yang Sudah Disahkan:</label>
    <input type="text" name="dokumen_kebijakan_spbe">
    <label>Justifikasi / Catatan Penilai:</label>
    <textarea name="dokumen_kebijakan_spbe_justifikasi"></textarea>

    <label>Dokumen SOP terkait SPBE yang Sudah Disahkan:</label>
    <input type="text" name="dokumen_sop_spbe">
    <label>Justifikasi / Catatan Penilai:</label>
    <textarea name="dokumen_sop_spbe_justifikasi"></textarea>

    <!-- Subjek Peningkatan Kompetensi SDM -->
    <h3>Peningkatan Kompetensi SDM</h3>

    <label>Unit Organisasi Memiliki Anggaran untuk Peningkatan SDM SPBE Secara Rutin:</label>
    <input type="text" name="anggaran_sdm_spbe">
    <label>Justifikasi / Catatan Penilai:</label>
    <textarea name="anggaran_sdm_spbe_justifikasi"></textarea>

    <label>Unit Organisasi SDM Khusus untuk Pengelolaan SPBE:</label>
    <input type="text" name="sdm_khusus_spbe">
    <label>Justifikasi / Catatan Penilai:</label>
    <textarea name="sdm_khusus_spbe_justifikasi"></textarea>

    <!-- Subjek Anggaran -->
<h3>Anggaran</h3>

<label>Anggaran yang Dialokasikan untuk Kegiatan Terkait SPBE:</label>
<input type="text" name="anggaran_dialokasikan">
<label>Justifikasi / Catatan Penilai:</label>
<textarea name="anggaran_dialokasikan_justifikasi"></textarea>

<label>Penambahan Alokasi Anggaran untuk Kegiatan Terkait SPBE:</label>
<input type="text" name="anggaran_penambahan">
<label>Justifikasi / Catatan Penilai:</label>
<textarea name="anggaran_penambahan_justifikasi"></textarea>

<label>Jumlah Pengurangan Anggaran ATK dan Untuk Apa:</label>
<input type="text" name="anggaran_pengurangan">
<label>Justifikasi / Catatan Penilai:</label>
<textarea name="anggaran_pengurangan_justifikasi"></textarea>


    <button type="submit">Kirim</button>
</form>

<script>
    const subUnitData = <?= json_encode($sub_unit_kerja) ?>;

    document.getElementById('unit_kerja').addEventListener('change', function () {
        const selectedUnit = this.value;
        const subUnitDropdown = document.getElementById('sub_unit_kerja');
        subUnitDropdown.innerHTML = '<option value="">-- Pilih Sub Unit Kerja --</option>';
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
