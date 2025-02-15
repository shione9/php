<?php
$people=[
  ["Taro",25,"Men"],
  ["Jiro",20,"Men"],
  ["Hanako",16,"Women"]
];

foreach($people as $person){
  echo $person[0]."(".$person[1]."歳".$person[2].")"."<br/>";
}

