<?php
// Your code here!
/*
MNM PHP Bootcamp 1. Ödev Kerem BASMACI
3.	OBJECT ORIENTED PROGRAMMING (60 puan)
•	Taşıtlarla ilgili bir sınıf oluşturulmalıdır. Oluşturulan bu sınıfta aşağıdaki öznitelikler bulunmalıdır.
plakaNo, marka, model, tekerlekSayisi, kanatAcikligi
•	Taşıtılara alternatif olarak üç tane sınıf oluşturulmalıdır:
araba, motorsiklet, uçak
•	Oluşturulan bu sınıflara yukarıda tanımlanan öznitelikler (property) değer olarak girilmeli, aşağıdaki gibi ekrana bastırabilmelidir:

Araba taşıtına ait öznitelikler şu şekildedir:
Plaka No: 06 ARAC 06
Marka: Mercedes
Model: C180
Tekerlek Sayısı: 4

Motorsiklet taşıtına ait öznitelikler şu şekildedir:
Plaka No: 06 MOTOR 06
Marka: Honda
Model: Forza 750
Tekerlek Sayısı: 2

Uçak taşıtına ait öznitelikler şu şekildedir:
Marka: Airbus
Model: A380
Kanat Açıklığı: 80m

Yukarıda verilen değerler örnektir. Değerler her taşıt için rastgele girilebilir.
*/

abstract class Vehicle{
    
    public $plakaNo;
    public $marka;
    public $model;
    public $tekerlekSayisi;
    public $kanatAcikligi;
    abstract public function intro();
    
}
class Car extends Vehicle{
    
    function __construct($plakaNo,$marka,$model,$tekerlekSayisi) {
        $this->plakaNo = $plakaNo;
        $this->marka = $marka;
        $this->model = $model;
        $this->tekerlekSayisi = $tekerlekSayisi;
    }
    //Override
    function intro(){
        echo "Araba taşıtına ait öznitelikler şu şekildedir:\n";
        echo "Plaka No: ".$this->plakaNo."\n";
        echo "Marka: ".$this->marka."\n";
        echo "Model: ".$this->model."\n";
        echo "Tekerlek Sayısı: ".$this->tekerlekSayisi."\n";
        
    }

 
}

class Motorcycle extends Vehicle{
    
    function __construct($plakaNo,$marka,$model,$tekerlekSayisi) {
        $this->plakaNo = $plakaNo;
        $this->marka = $marka;
        $this->model = $model;
        $this->tekerlekSayisi = $tekerlekSayisi;
    }
    //Override
    function intro(){
        echo "Motorsiklet taşıtına ait öznitelikler şu şekildedir:\n";
        echo "Plaka No: ".$this->plakaNo."\n";
        echo "Marka: ".$this->marka."\n";
        echo "Model: ".$this->model."\n";
        echo "Tekerlek Sayısı: ".$this->tekerlekSayisi."\n";
    }
    
}

class Airplane extends Vehicle{
    function __construct($marka,$model,$kanatAcikligi) {
        $this->marka = $marka;
        $this->model = $model;
        $this->kanatAcikligi = $kanatAcikligi;
    }
    //Override
    function intro(){
        echo "Uçak taşıtına ait öznitelikler şu şekildedir:\n";
        echo "Marka: ".$this->marka."\n";
        echo "Model: ".$this->model."\n";
        echo "Kanat Açıklığı: ".$this->kanatAcikligi."m\n";
        
    }
    
}

$objCar = new Car("20 KB 34","Tesla","Model Y",4);
$objMotor = new Motorcycle("34 MY 20","Honda","CBR650R",2);
$objPlane = new Airplane("Airbus","777",64.8);


$objCar->intro();
echo "\n";
$objMotor->intro();
echo "\n";
$objPlane->intro();

/************PROGRAM ÇIKTISI**************


Araba taşıtına ait öznitelikler şu şekildedir:
Plaka No: 20 KB 34
Marka: Tesla
Model: Model Y
Tekerlek Sayısı: 4

Motorsiklet taşıtına ait öznitelikler şu şekildedir:
Plaka No: 34 MY 20
Marka: Honda
Model: CBR650R
Tekerlek Sayısı: 2

Uçak taşıtına ait öznitelikler şu şekildedir:
Marka: Airbus
Model: 777
Kanat Açıklığı: 64.8m


*****************************************/
?>