<?php
// Your code here!
/*
MNM PHP Bootcamp 1. Ödev Kerem BASMACI
2. Soru
2.	YALIN (PURE) PHP İLE PROGRAMLAMA (20 puan)
•	N tane elemanı olan bir dizideki en küçük elemanı ekrana bastıran bir fonksiyon yazınız. 
•	N sayısı bir değişken üzerinden dinamik olarak tanımlanmalıdır.
•	PHP için önceden asort vb. önceden tanımlanmış (builtin) fonksiyonları kullanılmamalıdır.
*/


//Diziyi oluşturma
$x = array();
$arraylen = rand(10,50);
echo $arraylen."\n";
//Oluşturulan Diziyi Yazdırma
for($i=0;$i<$arraylen;$i++)
{
    $x[$i]=rand(-20,100);
    echo $x[$i]." ";
}
echo "\n";


//En küçüğü bulan fonksiyon
function writeSmallest($arr)
{
    if(count($arr)<2)
    {
        echo "Dizi 2 elemandan küçük";
    }
    else
    {
        $temp=$arr[0];
        for($i=1;$i<count($arr);$i++)
        {
            if($arr[$i]<$temp)
            {
                $temp=$arr[$i];
            }
        } 
        echo "En Küçük Eleman : ".$temp;
    }
    
}

writeSmallest($x);



?>
