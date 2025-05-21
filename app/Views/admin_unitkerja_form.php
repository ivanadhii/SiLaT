<!DOCTYPE html>
<html>
<head>
    <title>Admin - Input Unit Kerja & Sub Unit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .message {
            color: green;
            margin-top: 10px;
        }

        hr {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Admin - Input Unit & Sub Unit Kerja</h2>

    <?php if(session()->getFlashdata('success')): ?>
        <p class="message"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <form method="POST" action="/admin-unitkerja/save">
        <label>Unit Kerja:</label>
        <input type="text" name="unit_kerja" required>

        <label>Sub Unit Kerja:</label>
        <textarea name="sub_unit_kerja" required></textarea>

        <button type="submit">Simpan</button>
    </form>

    <hr>
    <h3>Daftar Unit & Sub Unit:</h3>
    <ul>
        <?php foreach($unit_kerja as $row): ?>
            <li><strong><?= esc($row['unit_kerja']) ?></strong><br><em><?= esc($row['sub_unit_kerja']) ?></em></li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
