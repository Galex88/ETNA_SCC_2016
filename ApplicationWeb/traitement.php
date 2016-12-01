<?PHP
if (isset($_POST['latitude']) && isset($_POST['longitude']) && isset($_POST['station']) && isset($_POST['title']) && isset($_POST['widjet']))
{
	$station = $_POST['title'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $adresse = $_POST['address'];

    switch ($_POST['widjet']) {
    	case 'rer':
    		$fichier = 'XML/widRER.xml';
    		$widjet = $_POST['widjet'];
    		break;

    	case 'meteo':
    	 	$fichier = 'XML/widMeteo.xml';
    		$widjet = $_POST['widjet'];
    	 	break;

    	case 'traffic':
    		$fichier = 'XML/widTraffic.xml';
    		$widjet = $_POST['widjet'];
    		break;
    }
    $xml = simplexml_load_file($fichier);
    print_r($xml);
}