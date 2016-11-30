<?PHP
if (isset($_POST['station']) && isset($_POST['latitude']) && isset($_POST['longitude']) && isset($_POST['address']))
{
	$export = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n"; 
	$export="<configurationWidjetRER>";

	while($row = mysqli_fetch_array($result))
	{   
	    $export.="<configurationWidjetRER>";
	    $station=$_POST['station'];
	    $latitude=$_POST['latitude'];
	    $longitude=$_POST['longitude'];
	    $adresse=$_POST['address'];

	    $export.="	<field>
	    				<id>326</id>
	    				<fieldDefinitionIdentifier>'$station'</fieldDefinitionIdentifier>
	    				<fieldValue>
	    					<value key=\"latitude\">'$latitude'</value>
	    					<value key=\"longitude\">'$longitude'</value>
	    					<value key=\"address\">'$adresse'</value>
	    				</fieldValue>
	    			<field>";
	    $export.="</configurationWidjetRER>";
	}
	$export.="</configurationWidjetRER>";

	file_put_contents("export.xml", $export);
	echo "<a href='export.xml' target='_blank'>Export database as XML</a>";
}