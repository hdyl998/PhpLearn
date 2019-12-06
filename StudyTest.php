
<pre>

<?php
define('TTT', 111);

var_dump(TTT);
$soups=array(
    'Monday'=>'AA',
    'Tuesday'=>"BB",
    'Wednesday'=>'CC'
);
print count($soups);

print_r($soups);
print $soups."ttt";


$array['tt']='Value';

print_r($array);

$ccc= array_merge($soups,$array);

var_dump($ccc);

var_dump($array+$soups);
  print "<br/>";
  foreach ($soups as $key => $value) {
    print $key . "  " . $value;
    print "<br/>";
}

for($n=0;$n<count($soups);$n++){
     print "the$array[$n]";
       print "<br/>";
}
  
print PHP_VERSION;
    ?>

</pre>