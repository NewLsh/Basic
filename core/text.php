<?php
$link=mysqli_connect("localhost",'root','9539','query');
$res=$link->query('select * from allroom');
echo'<pre>';
echo $link->get_host_info();
while($row=$res->fetch_assoc()){
  print_r($row);
}

?>
