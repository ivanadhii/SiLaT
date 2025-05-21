<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penilaian</title>
    <style>
        :root {
            --primary-color: #3498db;
            --primary-dark: #2980b9;
            --secondary-color: #2c3e50;
            --light-bg: #eef2f5;
            --white: #ffffff;
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
            padding: 40px 20px;
            text-align: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
        }
        
        .header {
            margin-bottom: 40px;
        }
        
        h2 {
            color: var(--secondary-color);
            font-size: 32px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .subtitle {
            color: #7f8c8d;
            font-size: 16px;
            margin-bottom: 30px;
        }
        
        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        
        .menu a {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 150px;
            padding: 20px;
            background-color: var(--white);
            color: var(--secondary-color);
            text-decoration: none;
            border-radius: 12px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }
        
        .menu a:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }
        
        .menu a::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background-color: var(--primary-color);
            transition: var(--transition);
        }
        
        .menu a:hover::before {
            height: 8px;
        }
        
        .menu-icon {
            font-size: 36px;
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        .menu-text {
            font-weight: 500;
            font-size: 18px;
        }
        
        .footer {
            margin-top: 50px;
            color: #95a5a6;
            font-size: 14px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .menu {
                flex-direction: column;
                align-items: center;
            }
            
            .menu a {
                width: 80%;
                max-width: 300px;
                height: 120px;
            }
            
            h2 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Dashboard Penilaian</h2>
            <div class="subtitle">Sistem Penilaian Terpadu</div>
        </div>

        <div class="menu">
            <a href="<?= site_url('/penilaian/form') ?>">
                <div class="menu-icon">📊</div>
                <span class="menu-text">Form Progress</span>
            </a>
            <a href="<?= site_url('/teknologi/form') ?>">
                <div class="menu-icon">💻</div>
                <span class="menu-text">Form Teknologi</span>
            </a>
            <a href="<?= site_url('/organisasi/form') ?>">
                <div class="menu-icon">👥</div>
                <span class="menu-text">Form Organisasi</span>
            </a>
            <a href="<?= site_url('/data/form') ?>">
                <div class="menu-icon">📁</div>
                <span class="menu-text">Form Data</span>
            </a>
        </div>

        <div class="footer">
            © 2025 - Sistem Dashboard Penilaian
        </div>
    </div>
</body>
</html>