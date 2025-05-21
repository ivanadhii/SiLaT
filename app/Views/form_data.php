<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --primary-dark: #2980b9;
            --primary-light: #e3f2fd;
            --secondary-color: #2c3e50;
            --light-bg: #eef2f5;
            --white: #ffffff;
            --border-color: #dce4ec;
            --success-color: #2ecc71;
            --success-light: #e8f5e9;
            --error-color: #e74c3c;
            --error-light: #ffebee;
            --warning-color: #f39c12;
            --warning-light: #fff8e1;
            --info-color: #3498db;
            --info-light: #e3f2fd;
            --gray-light: #ecf0f1;
            --gray: #95a5a6;
            --gray-dark: #7f8c8d;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
            --radius: 8px;
            --radius-lg: 12px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: var(--light-bg);
            padding: 0;
            color: var(--secondary-color);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        
        .header:after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: var(--primary-color);
            margin: 15px auto 0;
            border-radius: 2px;
        }
        
        .page-title {
            color: var(--secondary-color);
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .page-subtitle {
            color: var(--gray-dark);
            font-size: 16px;
        }
        
        .card {
            background-color: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            margin-bottom: 30px;
            overflow: hidden;
        }
        
        .breadcrumb-wrapper {
            padding: 0 0 20px 0;
        }
        
        .breadcrumb {
            display: flex;
            align-items: center;
            padding: 15px;
            background-color: var(--white);
            border-radius: var(--radius);
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
            display: flex;
            align-items: center;
            transition: var(--transition);
        }
        
        .breadcrumb-item a:hover {
            color: var(--primary-dark);
        }
        
        .breadcrumb-item a i {
            margin-right: 6px;
        }
        
        .breadcrumb-separator {
            margin: 0 10px;
            color: var(--gray);
        }
        
        .section-title {
            color: var(--secondary-color);
            font-size: 20px;
            margin: 0;
            padding: 20px;
            background-color: var(--primary-light);
            border-left: 4px solid var(--primary-color);
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .section-title i {
            margin-right: 10px;
            color: var(--primary-color);
        }
        
        .section-content {
            padding: 25px;
        }
        
        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin: -10px;
        }
        
        .form-group {
            flex: 1 1 100%;
            padding: 10px;
            margin-bottom: 5px;
        }
        
        @media (min-width: 768px) {
            .form-group.col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
            
            .form-group.col-md-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
            
            .form-group.col-md-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary-color);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            font-size: 15px;
            transition: var(--transition);
            background-color: var(--white);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.25);
        }
        
        .form-control::placeholder {
            color: var(--gray);
        }
        
        .form-control:disabled {
            background-color: var(--gray-light);
            cursor: not-allowed;
        }
        
        textarea.form-control {
            min-height: 100px;
            resize: vertical;
        }
        
        .nilai-group {
            background-color: var(--info-light);
            padding: 15px;
            border-radius: var(--radius);
            margin-top: 5px;
            border: 1px solid rgba(52, 152, 219, 0.2);
        }
        
        .nilai-label {
            font-weight: 600;
            color: var(--info-color);
            display: flex;
            align-items: center;
        }
        
        .nilai-label i {
            margin-right: 8px;
        }
        
        .alert {
            padding: 15px;
            border-radius: var(--radius);
            margin-bottom: 20px;
            position: relative;
        }
        
        .alert-success {
            background-color: var(--success-light);
            color: var(--success-color);
            border-left: 4px solid var(--success-color);
        }
        
        .alert-danger {
            background-color: var(--error-light);
            color: var(--error-color);
            border-left: 4px solid var(--error-color);
        }
        
        .alert-icon {
            margin-right: 10px;
        }
        
        ul.error-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        ul.error-list li {
            margin-bottom: 5px;
            padding-left: 20px;
            position: relative;
        }
        
        ul.error-list li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: var(--error-color);
        }
        
        .btn {
            display: inline-block;
            font-weight: 500;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: var(--radius);
            transition: var(--transition);
            cursor: pointer;
        }
        
        .btn-primary {
            color: var(--white);
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .btn-lg {
            padding: 1rem 2rem;
            font-size: 1.125rem;
            border-radius: var(--radius);
        }
        
        .hint-text {
            color: var(--gray-dark);
            font-size: 13px;
            margin-top: 5px;
        }
        
        .form-footer {
            padding: 20px;
            background-color: var(--gray-light);
            border-top: 1px solid var(--border-color);
            text-align: right;
        }
        
        .badge {
            display: inline-block;
            padding: 0.25em 0.6em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 50rem;
            color: var(--white);
            background-color: var(--gray);
        }
        
        .badge-primary {
            background-color: var(--primary-color);
        }
        
        .badge-success {
            background-color: var(--success-color);
        }
        
        .badge-warning {
            background-color: var(--warning-color);
        }
        
        .required-mark {
            color: var(--error-color);
            margin-left: 3px;
        }
        
        .responsive-table {
            width: 100%;
            overflow-x: auto;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            .section-title {
                font-size: 18px;
            }
            
            .page-title {
                font-size: 24px;
            }
            
            .breadcrumb {
                flex-wrap: wrap;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="breadcrumb-wrapper">
            <div class="breadcrumb">
                <div class="breadcrumb-item">
                    <a href="<?= site_url('/dashboard') ?>">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                </div>
                <div class="breadcrumb-separator">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="breadcrumb-item">
                    Form Data
                </div>
            </div>
        </div>
        
        <div class="header">
            <h1 class="page-title">Form Data</h1>
            <p class="page-subtitle">Silakan lengkapi formulir penilaian data untuk unit kerja yang dipilih</p>
        </div>
        
        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle alert-icon"></i>
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        
        <?php if(session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle alert-icon"></i>
                <ul class="error-list">
                    <?php foreach(session()->getFlashdata('errors') as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <form action="" method="post">
            <!-- Informasi Unit Kerja -->
            <div class="card">
                <h3 class="section-title">
                    <i class="fas fa-info-circle"></i> Informasi Unit Kerja
                </h3>
                <div class="section-content">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="unit_kerja" class="form-label">
                                Unit Kerja <span class="required-mark">*</span>
                            </label>
                            <select id="unit_kerja" name="unit_kerja" class="form-control" required>
                                <option value="">-- Pilih Unit Kerja --</option>
                                <?php foreach ($unit_kerja as $uk): ?>
                                    <option value="<?= $uk['unit_kerja'] ?>"><?= $uk['unit_kerja'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="sub_unit_kerja" class="form-label">
                                Sub Unit Kerja <span class="required-mark">*</span>
                            </label>
                            <select id="sub_unit_kerja" name="sub_unit_kerja" class="form-control" required>
                                <option value="">-- Pilih Sub Unit Kerja --</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="tanggal_submit" class="form-label">Tanggal Submit</label>
                            <input type="date" id="tanggal_submit" name="tanggal_submit" class="form-control">
                            <div class="hint-text">
                                <i class="fas fa-info-circle"></i> Tanggal pengisian formulir penilaian
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tata Kelola Data -->
            <div class="card">
                <h3 class="section-title">
                    <i class="fas fa-database"></i> Tata Kelola Data
                </h3>
                <div class="section-content">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="standar_data" class="form-label">Standar Data / Katalog Data:</label>
                            <input type="text" id="standar_data" name="standar_data" class="form-control" placeholder="Masukkan informasi standar data atau katalog data">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="standar_data_justifikasi" class="form-label">Justifikasi / Catatan Penilai:</label>
                            <textarea id="standar_data_justifikasi" name="standar_data_justifikasi" class="form-control" placeholder="Masukkan justifikasi atau catatan"></textarea>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="basis_data" class="form-label">Basis Data:</label>
                            <input type="text" id="basis_data" name="basis_data" class="form-control" placeholder="Masukkan informasi basis data">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="basis_data_justifikasi" class="form-label">Justifikasi / Catatan Penilai:</label>
                            <textarea id="basis_data_justifikasi" name="basis_data_justifikasi" class="form-control" placeholder="Masukkan justifikasi atau catatan"></textarea>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="aplikasi_informasi" class="form-label">Aplikasi / Sistem Informasi:</label>
                            <input type="text" id="aplikasi_informasi" name="aplikasi_informasi" class="form-control" placeholder="Masukkan informasi aplikasi atau sistem informasi">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="aplikasi_informasi_justifikasi" class="form-label">Justifikasi / Catatan Penilai:</label>
                            <textarea id="aplikasi_informasi_justifikasi" name="aplikasi_informasi_justifikasi" class="form-control" placeholder="Masukkan justifikasi atau catatan"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Distribusi / Publikasi Data -->
            <div class="card">
                <h3 class="section-title">
                    <i class="fas fa-share-alt"></i> Distribusi / Publikasi Data
                </h3>
                <div class="section-content">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="nilai-group">
                                <label for="publikasi_data_nilai" class="nilai-label">
                                    <i class="fas fa-star"></i> Nilai:
                                </label>
                                <input type="number" id="publikasi_data_nilai" name="publikasi_data_nilai" class="form-control" min="0" max="100" placeholder="Nilai (0-100)">
                            </div>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="publikasi_data_justifikasi" class="form-label">Justifikasi / Catatan Penilai:</label>
                            <textarea id="publikasi_data_justifikasi" name="publikasi_data_justifikasi" class="form-control" placeholder="Masukkan justifikasi atau catatan"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Integrasi Data -->
            <div class="card">
                <h3 class="section-title">
                    <i class="fas fa-link"></i> Integrasi Data
                </h3>
                <div class="section-content">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="nilai-group">
                                <label for="integrasi_data_nilai" class="nilai-label">
                                    <i class="fas fa-star"></i> Nilai:
                                </label>
                                <input type="number" id="integrasi_data_nilai" name="integrasi_data_nilai" class="form-control" min="0" max="100" placeholder="Nilai (0-100)">
                            </div>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="integrasi_data_justifikasi" class="form-label">Justifikasi / Catatan Penilai:</label>
                            <textarea id="integrasi_data_justifikasi" name="integrasi_data_justifikasi" class="form-control" placeholder="Masukkan justifikasi atau catatan"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tombol Submit -->
            <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-lg">
                    <i class="fas fa-paper-plane"></i> Kirim Penilaian
                </button>
            </div>
        </form>
    </div>

    <script>
        // Script untuk membuat dropdown sub unit kerja dinamis
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