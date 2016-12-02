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
        $xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<Version media-type="application/vnd.ez.api.Version+xml" href="/api/ezp/v2/content/objects/99/versions/1">
	<Fiels>
		<field>
			<id>323</id>
			<fieldDefinitionIdentifier>$station</fieldDefinitionIdentifier>
		</field>
		<field>
			<id>326</id>
			<fieldValue>
				<value key="latitude">$latitude</value>
				<value key="longitude">$longitude</value>
				<value key="address">$adresse</value>
			</fieldValue>
		</field>
		<field>
			<id>330</id>
			<fieldDefinitionIdentifier>$station</fieldDefinitionIdentifier>
		</field>
		<field>
			<id>333</id>
			<fieldValue>
				<value key="latitude">$latitude2</value>
				<value key="longitude">$longitude2</value>
				<value key="address">$adresse2</value>
			</fieldValue>
		</field>
	</Fiels>
</Version>
        XML;
        <?php>
        /*faire un replace de $station par $station*/
		break;

	case 'meteo':
	 	$fichier = 'XML/widMeteo.xml';
        $station = $_POST['title'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $adresse = $_POST['station'];
		$widget = $_POST['widget'];
        
	 	break;

	case 'traffic':
		$fichier = 'XML/widTraffic.xml';
        $station = $_POST['title'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $adresse = $_POST['station'];
		$widget = $_POST['widget'];
        
        break;
}