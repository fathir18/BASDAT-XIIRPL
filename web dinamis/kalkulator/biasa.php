<html>
<head>
    <title>Kalkulator Biasa</title>
</head>
<body>
    <h2>Kalkulator Biasa</h2>
    <form>
        <input type="number" name="angka1">
        <select name="operator">
            <option selected disabled="">Pilih Operator</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="angka2">
        <div style="margin">
        <button type="reset">clear</button>
        <button type="submit">hitung</button>
        </div>
        <?php
        if ($_GET):
            $angka1 = (double) @$_GET['angka1'];
            $angka2 = (double) @$_GET['angka2'];
            $operator = @$_GET['operator'];
            switch ($operator) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    $hasil = $angka1 / $angka2;
                    break;
            }
        ?>
        <div>
            HASIL : <strong><?php echo $hasil?></strong>
        </div>
        <?php
        endif;?>
        </form>
</body>
</html>