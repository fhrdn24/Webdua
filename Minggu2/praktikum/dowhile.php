<?php 

$index=1;
do{
    echo "$index";
    $index++;
}while($index>=10);

//otput hanya menampilkan 1 karena waktu mengecek menggunakan do menghasilkan false maka perulangan tidak diteruskan
echo "<br/>";
//contoh kedua
$index2=1;
do{
    echo "$index2";
    $index2+=2;
}while($index2<=20);
//ini menghasilkan nilai true karena pengecekan menggunakan do sesuai dengan nilai variabel
?>