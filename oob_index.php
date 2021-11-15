<!DOCTYPE html> <html> 
<head>	
    <meta charset="UTF-8"> 
    <title>Flächenberechnung</title> 
</head> 
 
<body> 
	<h1>Flächenberechnung</h1>	

 
	<?php
//Definition der Klasse User
class Raum {
	//Definition der Eigenschaften name, email und password
	private $name;
	private $laenge;
	private $breite;
	public $flaeche;
	private $belagart;

	//Set Functin sollte immer mit anderem Rückgabewert (Bsp. raumname variable ist aber name)
	public function setname($raumname){
		$this->name= $raumname;
	}
	//get function zum holen der private Variable
	public function getname(){
		return $this->name;
	}

	public function setbelagart($raumbelagart){
		$this->belagart= $raumbelagart;
	}
	public function getbelagart(){
		return $this->belagart;
	}
	
	public function setlaenge($laenge){
		$this->laenge= $laenge;
	}
	public function getlaenge(){
		return $this->laenge;
	}

	public function setbreite($breite){
		$this->breite=$breite;
	}
	public function getbreite(){
		return $this->breite;
	}
	// berechnung der fläche 
	public function setflaeche() {
		$this->flaeche = $this->laenge * $this->breite;
	}
	public function getflaeche() {
		return $this->flaeche;
	}

}



$wohnzimmer = new Raum();
$wohnzimmer->setname("Wohnzimmer");
$wohnzimmer->setbelagart("PVC");
$wohnzimmer->setlaenge(3);
$wohnzimmer->setbreite(4);
$wohnzimmer->setflaeche();

echo "Die Fläche für " . $wohnzimmer->getname() . " beträgt: " . $wohnzimmer->getflaeche() . " m².";
echo "<br> Die Belagart ist: " . $wohnzimmer->getbelagart() . ".";
?>
 
</html> 