<?php 
session_start();

$rate = '';
if ($result == 10) {
	$rate = "Excellent!";
} else if ($result == 9) {
	$rate = "Very Good!";
} else if ($result == 8){
	$rate = "Good!";
} else if ($result == 7) {
	$rate = "Nice one!";
} else {
	$rate = "Poor, try your best next time ..";
}

$remarks = "";
if ($answers[0] == $res[0]) {
	$remarks = "<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>";
} else {
	$remarks = "<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>";			
}
$remarks1 = "";
if ($answers[1] == $res[1]) {
	$remarks1 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>";
} else {
	$remarks1 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>";			
}
$remarks2 = "";
if ($answers[2] == $res[2]) {
	$remarks2 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>";
} else {
	$remarks2 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>";			
}
$remarks3 = "";
if ($answers[3] == $res[3]) {
	$remarks3 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>";
} else {
	$remarks3 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>";			
}
$remarks4 = "";
if ($answers[4] == $res[4]) {
	$remarks4 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>";
} else {
	$remarks4 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>";			
}
$remarks5 = "";
if ($answers[5] == $res[5]) {
	$remarks5 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>";
} else {
	$remarks5 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>";			
}
$remarks6 = "";
if ($answers[6] == $res[6]) {
	$remarks6 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>";
} else {
	$remarks6 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>";			
}
$remarks7 = "";
if ($answers[7] == $res[7]) {
	$remarks7 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>";
} else {
	$remarks7 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>";			
}
$remarks8 = "";
if ($answers[8] == $res[8]) {
	$remarks8 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>";
} else {
	$remarks8 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>";			
}
$remarks9 = "";
if ($answers[9] == $res[9]) {
	$remarks9 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/check.png'/></p>";
} else {
	$remarks9 = "<p style = 'height:10px;width:10px'><img src = 'assets/img/ekis.png'/></p>";			
}
 ?>