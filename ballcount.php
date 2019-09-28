<html>
<head></head>
<body>

<?php
class DragonBall{
    private $ballCount;

    public function __construct($found){
        $this->ballCount=$found;
        echo $found;
    }

  
    public function iFoundaBall(){
        $this->ballCount++;
        if($this->ballCount===7){
          echo "You can ask for your wish.";
          $this->ballCount=0;
        }
        else {
            echo "No It Cant";
        }
      }
    }

    $found=new DragonBall(0);
    echo $found->iFoundaBall(); 


?>

</body>
</html>`