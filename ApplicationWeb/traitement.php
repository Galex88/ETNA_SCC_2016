<?php
$fichier = '';
$station = '';
$latitude = '';
$latitude2 = '';
$longitude = '';
$longitude2 = '';
$adresse = '';
$adresse2 = '';
$widget = '';

switch ($_POST['widget']) {
	case 'rer':
		$fichier = 'XML/widRER1.xml';
        $station = $_POST['title'];
        $latitude = $_POST['latitude1'];
        $latitude2 = $_POST['latitude2'];
        $longitude = $_POST['longitude1'];
        $longitude2 = $_POST['longitude2'];
        $adresse = $_POST['station1'];
        $adresse2 = $_POST['station2'];
		$widget = $_POST['widget'];
        $xml = simplexml_load_file($fichier);
        $wtitle = ($xml->Fields->field[0]->fieldDefinitionIdentifier[0]);
        print($wtitle);
        $wlat = ($xml->Fields->field[3]->fieldValue[0]->value[0]);
        print(" Lattitude".$wlat);
        $wlon = ($xml->Fields->field[3]->fieldValue[0]->value[1]);
        print(" longitude".$wlon);
        $wstation = ($xml->Fields->field[3]->fieldDefinitionIdentifier[0]);
        print(" ".$wstation);
		break;

	case 'meteo':
	 	$fichier = 'XML/widMeteo.xml';
        $station = $_POST['title'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $adresse = $_POST['station'];
		$widget = $_POST['widget'];
        $xml = simplexml_load_file($fichier);
        $wtitle = ($xml->Fields->field[0]->fieldDefinitionIdentifier[0]);
        print($wtitle);

	 	break;

	case 'traffic':
		$fichier = 'XML/widTraffic.xml';
        $station = $_POST['title'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $adresse = $_POST['station'];
		$widget = $_POST['widget'];
        $xml = simplexml_load_file($fichier);
        $wtitle = ($xml->Fields->field[0]->fieldDefinitionIdentifier[0]);
        print($wtitle);

}


//$wlat = ($xml->Fields->field[3]->fieldValue[0]);
//print(" ".$wlat);
