<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 400px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        .hasil {
            margin-top: 25px;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
        }

        .hasil h2 {
            margin-top: 0;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Form Nilai Ujian</h1>

    <form method="POST" action="">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="nilai">Nilai Ujian</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $nilai = (int) $_POST['nilai'];

        // Struktur kendali
        if ($nilai > 70) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }
    ?>

        <div class="hasil">
            <h2>Hasil Ujian</h2>

            <p><strong>Nama:</strong> <?php echo $nama; ?></p>

            <p><strong>Email:</strong> <?php echo $email; ?></p>

            <p><strong>Nilai Ujian:</strong> <?php echo $nilai; ?></p>

            <p><strong>Status:</strong> <?php echo $status; ?></p>
        </div>

    <?php
    }
    ?>

</div>

</body>
</html>
```