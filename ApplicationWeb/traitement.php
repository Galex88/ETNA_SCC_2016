<?PHP
if (isset($_POST['station']) && isset($_POST['latitude']) && isset($_POST['longitude']) && isset($_POST['address']))
{
	$fichier = '';
	$xml = simplexml_load_file($fichier);

	$station=$_POST['station'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $adresse=$_POST['address'];
}