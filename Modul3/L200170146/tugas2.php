<html>
<head>
<title>variable</title>
</head>
<body>
<h1>Bilangan Genap Ganjil</h1>
    <form method='post' action='tugas2.php'>
        <p>
            Masukkan nilai : <input type='text' name='nilai' size='10'>
        </p>
        <p><input type='submit' value='OK' name='submit'></p>
    </form>

    <?php
        error_reporting (E_ALL ^ E_NOTICE);
        $nilai = $_POST['nilai'];
        $submit = $_POST['submit'];

        if($submit){
            if($nilai%2==0){
                echo"Bilangan tersebut adalah bilangan genap";
            }else{
                echo"Bilangan tersebut adalah bilangan ganjil";
            }
            
        }
?>