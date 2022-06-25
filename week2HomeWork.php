<?php 
class Vehicles{
	public $model;
	public $brand;

	public function __construct($model,$brand)
    {
        $this->model = $model;
        $this->brand = $brand;
    }
}

class Car extends Vehicles
{
	public $licensePlate;
	public $numberOfWheels;

    public function __construct($licensePlate,$brand, $model,$numberOfWheels){
    	$this->licensePlate = $licensePlate;
        $this->numberOfWheels = $numberOfWheels;
        $this->brand = $brand;
        $this->model = $model;
    }

    public function vehicleOfFeatures()
    {
        return "<br> Araba taşıtına ait öznitelikler şu şekildedir: <br><br> Plako No: ".$this->licensePlate."<br> Marka:".$this->brand."<br> Model:".$this->model."<br> Tekerlek Sayısı:".$this->numberOfWheels."<br>";
    }
}

class Motorcycle extends Vehicles
{
	public $licensePlate;
	public $numberOfWheels;

    public function __construct($licensePlate,$brand, $model,$numberOfWheels){
    	$this->licensePlate = $licensePlate;
        $this->numberOfWheels = $numberOfWheels;
        $this->brand = $brand;
        $this->model = $model;
    }

    public function vehicleOfFeatures()
    {
        return "<br> Motorsiklet taşıtına ait öznitelikler şu şekildedir: <br> <br>Plako No: ".$this->licensePlate."<br> Marka:".$this->brand."<br> Model:".$this->model."<br> Tekerlek Sayısı:".$this->numberOfWheels."<br>";
    }
}


class Plane extends Vehicles
{
	public $wingspan;

    public function __construct($brand, $model,$wingspan){
    	$this->wingspan = $wingspan;
        $this->brand = $brand;
        $this->model = $model;
    }

    public function vehicleOfFeatures()
    {
        return "<br> Uçak taşıtına ait öznitelikler şu şekildedir: <br>"."<br> Marka:".$this->brand."<br> Model:".$this->model."<br> Tekerlek Sayısı:".$this->wingspan."<br>";
    }
}

$car =new Car('27 SY 08','YILDIZ','SY08','4');
echo $car->vehicleOfFeatures();

$motorcycle =new Motorcycle('08 SY 08','SALİH','YILDIZ','2');
echo $motorcycle->vehicleOfFeatures();

$plane =new Plane('Airbus','A380','72M');
echo $plane->vehicleOfFeatures();

?>