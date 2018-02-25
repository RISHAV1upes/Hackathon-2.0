<?php
session_start();
include 'config.php';
if (isset($_SESSION['teamid'])) {
    $teamid = $_SESSION['teamid'];
    $theme = $_GET['id'];
    $themefinal="";
    $limit = mysql_query("SELECT `counter` FROM `counter` WHERE `theme` = '$theme'");
    $col = mysql_fetch_array($limit);
    if ($col['counter'] <= 0) {
        echo "<script>alert('Kindly choose another theme.');window.location='theme.php';</script>";
    }
    $single = mysql_query("SELECT `theme` FROM `teamdetails` WHERE `teamid` = '$teamid'");
    $row = mysql_fetch_array($single);
	//$t1=$row['theme'] ;
   if ($row['theme']) {
     switch($theme)
  {
	  case 'a1':$themefinal="Woman Empowerment and Child Safety";
	            break;
	  case 'a2':$themefinal="Education and Literacy";
	            break;
          case 'a3':$themefinal="Rural Development";
	            break;	
         case 'a4':$themefinal="Healthcare and Informatics";
	            break;
        case 'a5':$themefinal="Process Automation and Artificial Intelligence";
	            break;
       case 'a6':$themefinal="Choose your own Theme";
	            break;
       case 'b1':$themefinal="Right to Equality ";
	            break;
      case 'b2':$themefinal="Right to Freedom";
	            break;
    case 'b3':$themefinal="Right against Exploitation";
	            break;
    case 'b4':$themefinal="Right to Freedom of Religion";
	            break;
    case 'b5':$themefinal="Cultural and Educational Rights";
	            break;
    case 'b6':$themefinal="Right to Constitutional Remedies";
	            break;
	case 'b7':$themefinal="Right to Privacy";
	            break;
	default:$themefinal="NOT GOT";
    			
  }
       $_SESSION["tf"] = $themefinal;

      $result = mysql_query("UPDATE `teamdetails` SET `theme` = '$themefinal' WHERE `teamid` = '$teamid' ") or die("Cannot connect to database!");
      $counter = mysql_query("UPDATE `counter` SET `counter` = (`counter` - 1) WHERE `theme` = '$theme'");
      header('location:congrats.php');
   }else {
        echo "<script>alert('You have already chosen a theme');window.location='theme.php';</script>";
    }
} else {
    header('location:./logout.php');
}
