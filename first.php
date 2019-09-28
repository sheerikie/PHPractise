<html>
<head></head>
<body>
<form action="first.php" method="post">
<input type="text" name="form">
<input type="submit">
</form>
<?php


class Burnaboy{
    var $age;
    var $name;
    var $nationality;
    private $genre;//visibility modifiers, getters and setters


    
    public function __Construct($aname,$aage,$anationality,$agenre){

$this->name=$aname;
$this->age=$aage;
$this->nationality=$anationality;
$this->setGenre($genre);

echo $agenre;

    }

    function getGenre(){
      
        return $this->genre;
    }
    function setGenre($genre){
        $this->genre=$genre;
    }


    function legal_age(){
       if ($this->age<25) {
           # code...
           echo 'Not legal age';
       } 
       else{
           echo 'Legal Age';
       }
    }
}


$musician1=new Burnaboy('Gwash',21,'kenyan','afro-genge');
$musician2=new Burnaboy('Burnaboy',29,'Nigerian','afro-Music');

echo '<br>';
echo $musician1->legal_age();
echo '<br>';
echo $musician2->legal_age();

$name='Juma';
include "useful-tool.php"; 
include "header.php";



echo "<h1>Manyani gani: $monkey </h1>";
$balance=array("Poku"=>20,"pine"=>30,"Rachel"=>35);
echo '<br>';
echo $balance[$_POST['form']];
echo $_POST['form'];
echo '<br>';
$port="Mama Ngina Mombasa";
//replace index
$port[0]='B';
echo $port;
echo '<br>';
//replace string
echo str_replace("Bama","Baba",$port);
echo '<br>';
//get substring
echo substr($port,11,3);
echo '<br>';
echo abs(pow(3,3));
echo '<hr>';
//function
function Hello($name){
    echo "Hello $name";
}
Hello('Adrian');
echo '<br>';
//function cube
function cube($num){
    $answer=pow($num,3);
    return $answer;
}
$ans=cube(5);
echo $ans;

echo '<br>';
$grade=$_POST['form'];
switch ($grade) {
    case 'A':
        # code...
        echo "You did great";
        break;
    case 'B':
        echo "You did good";
        break;
    case 'C':
        echo 'You did Okay';
        break;
    case 'D':
        echo 'Work Harder';
        break;
    case 'F':
        echo 'You Failed';
        break;
    default:
        # code...
        echo 'Invalid grade';
        break;
}
//loop array
$loto = array(34,23,66,56,21);
for ($i=0; $i < count($loto); $i++) { 
    # code...
    echo $loto[$i] ;
    echo '<br>';
}
echo $musician1->setGenre('Afro-pop');
echo $musician1->getGenre();

?>

</body>
</html>