<html>

<head>
    <title>Tugas Rumus</title>
</head>

<body>
    <h1 style="text-align:left;">Aplikasi sederhana menghitung rumus<br>Luas segitiga & Persegi panjang</h1>
        <hr>
        <form action="Rumus.php" method="POST">
            nilai 1:<input type="number" name='nilai1'>
            <br><br>
            nilai 2:<input type="number" name='nilai2'>
            <br><br>
            <select name="rumus" id="">
                <option value="ls">Luas segitiga</option>
                <option value="pp">Persegi panjang</option>
            </select>
            <input type="submit" name="hitung" value="hitung">
        </form>
</body>

</html>