<?php

$servername ="dragon.kent.ac.uk";
$username ="m07_reslink";
$password ="6adeseu";
$dbname ="reslink";

// Create connection
$conn = new mysqli($dragon.kent.ac.uk, $m07_reslink, $6adeseu, $reslink);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




if(isset($_POST['resURL'])){
	$resURL = $_POST['resURL'];

}





?>


<form action = "mining8.php" method = "POST">
<h1> --Data Mining Tool-- </h1>

---------------------------------------8---------------------------------------------------------------------------

<?php

?>

<br>
<br>

<b>Enter Research URL:
<input type = "url" name = "resURL"/>
<input type = "submit" value = "submit"/>

<br>
<br>

<textarea rows = "6" solc = "80" id = "TITLE">
</textarea> 
<input type = "submit" name = "Tags" value = "ENTER"/>
<b>Add the tags which describe you here!

Would you like to include the Photo from this source?: 
<input type = "radio" name = "pic"> Include
<?php

$url = $resURL or die ("Waiting to Add Files ");

$stringToManip = file_get_contents($url) or die ("File to be given");

$urlStringSplit = explode(" ", $stringToManip);

$findThis = 'Research';

$position = strpos($stringToManip, $findThis);


if(isset($position) === true && $position === null){
	echo "<br> <br>RESEARCH INTERESTS NOT ACCURATELY FOUND. PLEASE TRY ENTERING THEM MANUALLY!!!!!";
}else{

if(isset($_POST['resURL'])){
	print "<h3>SOME POTENTIAL TAGS FOR YOU: </h3> <br>"; 
	
	$tagWords = file_get_contents('buzzwords.txt');
	$divide = explode("\n", $tagWords);

	$result = array_intersect($urlStringSplit, $divide);
	$cleanResult = array_unique($result);
		echo join(" , ", $cleanResult);

	}else if(isset($_POST['resURL']) && !filter_var($url, FILTER_VALIDATE_URL) === true){
		
		$alertMessage = "Please provide a VALID URL";
		echo "<script type = 'text/javascript'>alert('$alertMessage');</script>";
	}
	

}

if (!filter_var($url, FILTER_VALIDATE_URL) === false){
	
}else if(isset($_POST['resURL']) && !filter_var($url, FILTER_VALIDATE_URL) === true){
	echo("Please enter VALID URL");
}else{
	
} 

require_once('C:/xampp/htdocs/dom file/simple_html_dom.php');
require_once('C:/xampp/htdocs/url_to_absolute/url_to_absolute.php');
$htmlImage = file_get_html($url);
$imgArray = array();

if(isset($_POST['pic'])){
	foreach($htmlImage -> find('img') as $element){
		//echo url_to_absolute($url, $element -> src), "\n";
		$imgArray[$element->src] = true;
	}
}



?>


</form>
