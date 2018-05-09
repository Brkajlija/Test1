<?php

/**
* 
*/
class Covek
{
	public $name;

	public $age;

	public $gender;

	public $result = [];

	private $height;

	private $weight;


	public function __construct($name,$age,$gender,$height,$weight){
			$this->name = $name;
			$this->age = $age;
			$this->gender = $gender;
			$this->height = $height;
			$this->weight = $weight;
	}

	public function getAll(){
		$this->result = [
			'ime' => $this->name,
			'godine' => $this->age,
			'pol' => $this->getGender(),
			'ibm' => $this->ibm(),
			'idealna_tezina' => $this->idealWeight()
		];

		return $this->result;
	}

	public function walk($step){
		for ($i=1; $i <=$step ; $i++) { 
			echo "Korak".$i."<br>";
		}
	}

	public function idealWeight(){
		
		return $this->height-100;
	}

	public function ibm(){
		return ($this->weight < $this->idealWeight())?'Ugojite se' : 'Smrsajte';
	}

	public function getGender()
	{

		switch ($this->gender) {
			case 'm':
				return $this->gender = 'Muskarac';
				break;
			case 'f':
				return $this->gender = 'Zensko';
				break;

			default:
				return $this->gender = 'Unesite pol';
				break;
		}
	}



}

$brka = new Covek('brka', 32, 'm', 172, 86);

//$brka->walk(5);
// $brka->idealWeight();
$podaci = $brka->getAll();


?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h3> Zdravo <?php echo strtoupper($podaci['ime']); ?> </h3>

<p> Vi imate <?php echo $podaci['godine']; ?> godine, pol <?php echo $podaci['pol'] ?>  </p>

<p> Vasa idealna tezina je <?php echo $podaci['idealna_tezina'] ?>kg</p>

<p>Preporuka je: <?php echo $podaci['ibm'] ?> </p>

</body>
</html>


