<?php
require_once "latihanFungsi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="formLingkaran" action="" method="POST">
        <input type="number" name="r" required min="0" placeholder="masukkan nilai r"/>
        <input type="submit" name="hitungLuasLingkaranBtn" value="hitung luas lingkaran"/>
        <input type="submit" name="hitungKllLingkaranBtn" value="hitung keliling lingkaran"/>
        <button type="reset" onclick="reset1()">reset</button>
        <br/>
        <?php
            if (isset($_POST['hitungLuasLingkaranBtn']))
            {
                echo "<div id='pesan1'> Luas Lingkaran dengan jari-jari ".$_POST['r']." adalah : ".luas_lingkaran ($_POST['r'])."</div>";
            }
            if (isset($_POST['hitungKllLingkaranBtn']))
            {
                echo "<div id='pesan1'> Keliling Lingkaran dengan jari-jari ".$_POST['r']." adalah : ".keliling_lingkaran ($_POST['r'])."</div>";
            }
        ?>
    </form>
    <script>
    function reset1()
    {
        document.getElementById('pesan1').innerHTML = ''    
    }
    </script>
    <br/><br/>

    <form name="formLuasSegitiga" action="" method="POST">
        <input type="number" name="alas" required min="0" placeholder="masukkan nilai alas"/>
        <input type="number" name="tinggi" required min="0" placeholder="masukkan nilai tinggi"/>
        <input type="submit" name="hitungLuasSegitigaBtn" value="hitung luas segitiga"/>
        <button type="reset" onclick="reset2()">reset</button>
        <br/>
        <?php
            if (isset($_POST['hitungLuasSegitigaBtn']))
            {
                echo "<div id='pesan2'> Luas Segitiga dengan alas ".$_POST['alas']." tinggi ".$_POST['tinggi']." adalah : ".luas_segitiga ($_POST['alas'],$_POST['tinggi'])."</div>";
            }
        ?>
    </form>
    <script>
    function reset2()
    {
        document.getElementById('pesan2').innerHTML = ''    
    }
    </script>
    <br/><br/>

    <form name=formKelSegitiga action="" method="POST">
        <input type="number" name="sisiA" required min="0" placeholder="masukkan nilai sisiA"/>
        <input type="number" name="sisiB" required min="0" placeholder="masukkan nilai sisiB"/>
        <input type="number" name="sisiC" required min="0" placeholder="masukkan nilai sisiC"/>
        <input type="submit" name="hitungKllSegitigaBtn" value="hitung keliling segitiga"/>
        <button type="reset" onclick="reset3()">reset</button>
        <br/>
        
        <?php
        if (isset($_POST['hitungKllSegitigaBtn']))
            {
                echo "<div id='pesan3'> Keliling Segitiga dengan sisiA ".$_POST['sisiA']." sisiB ".$_POST['sisiB']." sisiC ".$_POST['sisiC']." adalah : ".keliling_segitiga ($_POST['sisiA'],$_POST['sisiB'],$_POST['sisiC'])."</div>"; 
            }
        ?>
    </form>
    <script>
    function reset3()
    {
        document.getElementById('pesan3').innerHTML = ''    
    }
    </script>
    <br/><br/>

    <form name="formLuasJjrGenjang" action="" method="POST">
        <input type="number" name="alas" required min="0" placeholder="masukkan nilai alas"/>
        <input type="number" name="tinggi" required min="0" placeholder="masukkan nilai tinggi"/>
        <input type="submit" name="hitungLuasJjrGenjangBtn" value="hitung luas Jjr Genjang"/>
        <button type="reset" onclick="reset4()">reset</button>
        <br/>
        <?php
            if (isset($_POST['hitungLuasJjrGenjangBtn']))
            {
                echo "<div id='pesan4'> Luas Jajar Genjang dengan alas ".$_POST['alas']." tinggi ".$_POST['tinggi']." adalah : ".luas_jjrgenjang ($_POST['alas'],$_POST['tinggi'])."</div>";
            }
        ?>
    </form>
    <script>
    function reset4()
    {
        document.getElementById('pesan4').innerHTML = ''    
    }
    </script>
    <br/><br/>

    <form name=formKelJjrGenjang action="" method="POST">
        <input type="number" name="sisiA" required min="0" placeholder="masukkan nilai sisiA"/>
        <input type="number" name="sisiB" required min="0" placeholder="masukkan nilai sisiB"/>
        <input type="submit" name="hitungKllJjrGenjangBtn" value="hitung keliling Jjr Genjang"/>
        <button type="reset" onclick="reset5()">reset</button>
        <br/>
        <?php
        if (isset($_POST['hitungKllJjrGenjangBtn']))
            {
                echo "<div id='pesan5'>Keliling Jajar Genjang dengan sisiA ".$_POST['sisiA']." sisiB ".$_POST['sisiB']." adalah : ".keliling_jjrgenjang ($_POST['sisiA'],$_POST['sisiB'])."</div>"; 
            }
        ?>
        <br/><br/>  
    </form>
    <script>
    function reset5()
    {
        document.getElementById('pesan5').innerHTML = ''    
    }
    </script>
    <br/><br/>

</body>
</html>