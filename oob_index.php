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
	
Infos
Instanziierung
	- Objekt von einer Klasse erzeugt
	- Objekt = ein Exemplar einer Klasse und gehört immer einer bestimmte Klasse an.
	- Bewirkt Aufruf des Konstruktors  der Klasse

Konstruktor 
	- Ist eine Methode
	- Hat keinen Rückgabewert (auch kein Void)
	- Beim Instanziieren eines Objekts wird diese Methode automatisch aufgerufen
	- Aufgabe = Initialisierung der Attribute
Destruktor
	- Keine Rückgabewert
	- Wird beim beenden des Programms (oder wenn ein Objekt nicht mehr gebraucht wird) aufgerufen
	- Damit Speicherplatz wieder freigegeben werden kann

Klassenmethoden Implementieren
	- Stellen öffentliche Schnittstelle zu privaten Datenelementen (Attributen) dar
	- Jede Klassenmethode die deklariert wird, muss implementiert werden
	- Implementierung = Definiton
	- Definition (beginnt mit Name der Klasse gefolgt von zwei Doppelpunkten, Namen der Funktion und ihren Parametern)

	Klassendiagramm
	Name der Klasse Bsp. Raum
+laenge                         : double
+breite                          : double
+flaeche                        : double
+raumbezeichnung     : string
#belagart                      : string
+Display (): int

	OOB
Wird versucht Techniken bereitzustellen, die der enormen Komplexität von Programmen gerecht wird, die Wiederverwendbarkeit der Software Komponenten ermöglichen und die Daten mit den Aufgaben zur Datenmanipulation verbinden.

Vorteil:
	- Wiederverwendbarkeit und Nutzung bestehender Klassen
	- Dadurch Verkürzung Softwareentwicklung und Verringerung Wartungsaufwand und Qualität gesteigert

Daten werden nach außen verborgen (information hiding) sondern nur die Methoden erhalten Zugriff auf die Daten. (so besser vor uns oder anderen geschützt)
Punkte die zu klären sind vor der Programmierung
	- Objekte in den jeweiligen Bereichen
	- Welche Datenstruktur die Objekte beschreibt
	- Und Zugriffsnotwendigkeiten

Grundlagen
Objekte (Kombination von Daten und Funktionen(Operationen))
	- Konkreter Gegenstand (auch Personen oder Begriffe)
	- Merkmale
		○ Bezeichnung
		○ Attribut (Daten die das Objekt und den Zustand beschreiben)
		○ Methoden(Operationen welche man ausführen kann)
Klassen= Objekte mit gleichen Verhalten/gleichen Strukturen
	- Ist Definiton der Attribute und Operationen für eine Menge von Objekten

Datenkapselung
	- Ist die Eigenschaft einer Klasse, Ihre Daten (Instanzvariablen) vor externen Zugriffen außerhalb des Objekts zu schützen. 
	- Die Daten stehen für andere Objekte nicht zur Verfügung sondern können nur durch Funktionen, welche den Zugriff erlauben durch, zugegriffen werden
