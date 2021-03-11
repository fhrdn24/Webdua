<?php
    if($_POST){
        $fact = 1;
        //untuk mendapatkan nilai dari input text box dengan nama "number"
        $number = $_POST['number'];
        echo "Factorial of $number:<br><br>";
        //memulai loop
        for ($i = 1; $i <= $number; $i++){
            $fact = $fact * $i;
            }
            echo $fact . "<br>";
    }
?>
<html>  
<head>  
<title>program faktorial PHP</title>
</head>  
<body>  
<form method="post">  
    Masukan Angka:<br>
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
</body>  
</html>