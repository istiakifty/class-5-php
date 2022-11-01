<?php
//htmlentities

$name = "<script>alert'hello'</script>" ;

echo htmlentities($name);
echo "<br>" ;

$link = htmlentities("<a href='facebook.com'>facebook</a>");
echo $link ;
echo "<br>";
echo html_entity_decode($link);
echo "<br>";

//str repeat

$name = 'Php' ;
echo str_repeat($name,3);
echo "<br>";
//empty

$gmail = 'php@gmail' ;

if(empty($gmail)){
    echo "please input your gmail address";
}else{
    if(is_numeric($gmail)){
    echo "great";
    }else{
        echo "gmail must be int";
    }
}
echo "<br>";

$phonenumber= '01858542666' ;

if(empty($phonenumber)){
    echo "please input your gmail address";
}else{
    if(is_numeric($phonenumber)){
    echo "great";
    }else{
        echo "num must be int";
    }
}
echo "<br>";
//isset

$name = 'ifty';

var_dump(isset($name));
echo "<br>";

$name = null;

var_dump(isset($name));
echo "<br>";

//explode

$str = "i love  playing cricket";
$arr = explode(' ' , $str);
var_dump($arr);
echo "<br>";

  //implode

  $name_array = [
    'my',
     'name',
     'is',
     'Ikram_Hossain_Ifty'
   ];
  echo implode(' ',$name_array);
  echo "<br>";

  //count

$user =[ [
    'name' => 'hossain',
    'email' => 'testing@gmail.com',
  ],[
    'name' => 'hossain',
    'email' => 'testing@gmail.com',
  ],[
    'name' => 'hossain',
    'email' => 'testing@gmail.com',
  ],[
    'name' => 'hossain',
    'email' => 'testing@gmail.com',
  ],[
    'name' => 'hossain',
    'email' => 'testing@gmail.com',
  ],[
    'name' => 'hossain',
    'email' => 'testing@gmail.com',
  ],
  ];


  if(count($user) > 5){
    echo "time stop";
  } else {
    echo "complete";
  }
echo "<br>";
  //array_dif
$user = [
    "name" => "Ikram Hossain Ifty",
    "age" => 23,
    "num" => '01858542**6'
];
  

  $userUpdate = [
"name" => "thor",
"age" => 36,
"num" => '0185854296', 
  ];

  print_r(array_diff($user,$userUpdate));




?>


  