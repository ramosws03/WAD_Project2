<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Pemilihan Angka</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="angka">Angka:</label>
                <input type="number" class="form-control" id="angka" name="angka" required>
            </div>
            <div class="form-group">
                <label for="operasi">Operasi:</label>
                <select class="form-control" id="operasi" name="operasi">
                    <option value="Besar">Besar</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Kecil">Kecil</option>
                    <option value="Sangat Kecil">Sangat Kecil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $angka = $_POST['angka'];
            $operasi = $_POST['operasi'];

            if ($operasi == 'Besar') {
                $hasil = $angka + $angka;
            } elseif ($operasi == 'Sedang') {
                $hasil = $angka - $angka;
            } elseif ($operasi == 'Kecil') {
                $hasil = $angka * $angka;
            } elseif ($operasi == 'Sangat Kecil') {
                $hasil = $angka / $angka;
            }

            echo '<p>Hasil perhitungan: ' . $hasil . '</p>';
        }
        ?>
    </div>
</body>
</html>
