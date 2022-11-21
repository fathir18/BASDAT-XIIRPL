<html>
<head>
    <title>kalkulator saintifik</title>
</head>
<body>
    <h1>Kalkulator saintifik Sederhana</h1>
    <form action="">
        <input type="text" name="ekspresi">
        <div style="margin-top: 10px;">
            <button type="button" onclick="location.href = '?'">Clear</button>
            <button type="submit">Hitung</button>
        </div>
        <!-- strart count -->
        <?php
        if($_GET):
        $ekspresi = $_GET['ekspresi'];
        $hasil = eval("return {$ekspresi};"); ?>
        <div style="margin-top: 10px;">
            hasil <strong><?php echo $hasil?></strong>
        </div>
        <?php
        endif;
        ?>
        <!-- end count -->
    </form>
</body>
</html>