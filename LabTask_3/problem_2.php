<html>
<title>problem_2</title>
<body>

<?php
$marks = 71;
if($marks >= 90){
  echo "Result is: A+";
} elseif ($marks>80 && $marks<90) {
  echo "Result is: A";
} elseif ($marks>70 && $marks<80){
  echo "Result is: B";
} elseif ($marks>60 && $marks<70){
  echo "Result is: C";
} else {
  echo "Result is: F";
}
?>

</body>
</html>