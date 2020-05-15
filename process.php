<?php include 'database.php';?>
<?php session_start();?>

<?php 
if(!isset($_SESSION['score']))
{
$_SESSION['score'] = 0;
}
if($_POST)
{
 $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;
  //get total question
    $query="SELECT * FROM `questions` ";
     $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total= $results->num_rows;
