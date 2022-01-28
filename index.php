
    <!--In PHP, keywords (e.g. if, else, while, echo, etc.),
 classes, functions, and user-defined functions
 are not case-sensitive.
PHP statements end with a semicolon (;)
-->
<!DOCTYPEhtml>
<html>
<body>
<?php
$color = "red";
$COLOR = "Blue";
$coLOR= "Green";
$Color="yellow";
$a=10;
$b=10;
$c=$a/*+$j*/+ $b; //we can write comment in between statement as well
ECHO"Hello World!<br>";
echo"<b>Hello World!<b><br>";
EcHo"Hello World!<br>";
echo"<br> C = ".$c;
// This is a single-line comment
# This is also a single-line comment
/*
dsd
sds
sd
*/
if($a==$b)
{​
echo"<br>My car is ".$color;
echo"<br>My house is ".$COLOR;
echo"<br>My boat is ".$coLOR;
echo"<br>My boat is ".$Color;
}​
else
{​
echo"<br><h1>sorry no Color found</h1>";
}​
?>
</body>
</html>
