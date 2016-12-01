<?php
/*if (isset($_POST['latitude']) && isset($_POST['longitude']) && isset($_POST['station']) && isset($_POST['title']) && isset($_POST['widjet']))
{*/
    $fichier = '';
    $station = '';
    $latitude1 = '';
    $latitude2 = '';
    $longitude2 = '';
    $adresse = '';
    $widjet = '';

    switch ($_POST['widget']) {
    	case 'rer':
    		$fichier = 'XML/widRER1.xml';
            $station = $_POST['title'];
            $latitude1 = $_POST['latitude1'];
            $latitude2 = $_POST['latitude2'];
            $longitude2 = $_POST['longitude2'];
            $adresse = $_POST['station'];
    		$widjet = $_POST['widget'];
    		break;

    	case 'meteo':
    	 	$fichier = 'XML/widMeteo.xml';
            $station = $_POST['title'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $adresse = $_POST['station'];
    		$widjet = $_POST['widget'];
    	 	break;

    	case 'traffic':
    		$fichier = 'XML/widTraffic.xml';
            $station = $_POST['title'];
            $latitude = $_POST['latitude'];
            $longitude = $_POST['longitude'];
            $adresse = $_POST['station'];
    		$widjet = $_POST['widget'];
    		break;
    }
    $xml = simplexml_load_file($fichier);
    //$test = new SimpleXMLElement($xml);
    print_r ($xml->Fields->field->fieldDefinitionIdentifier[0]);
    //print_r($xml);
    //var_dump($xml);
    //echo $test->field[0]->fieldDefinitionIdentifier;
//}