<html>
<head></head>
<body>

<?php
Interface Type{
    public function setType($type);   
}
Interface Age{
    public function setAge($age);
}
class Inter implements Type,Age{
  private $type;
  private $age;

  public function setType($type){
    $this->type=$type;
    }
    public function setAge($age){
        $this->age=$age;
    }
}


$in_array = array('BurnaBoy','Harmonize','Arrow','Demarco');
if (in_array('BurnaBoy',$in_array)) {
  echo "Its alive";
}
else{
    echo "Its dead";
}
?>
</body>
</html>