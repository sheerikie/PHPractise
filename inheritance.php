<html>
<head></head>
<body>

<?php


class frontend{
function userInterface(){
    echo "We develop user interfaces";
}
function html(){
    echo " we use html";
}


}
class fullStack extends frontend{
function userInterface(){
        echo "We develop JavaScript interfaces";
    }
function services(){
    echo " we develop micro-services";
}

} 
$frontend=new frontend();  
echo $frontend->userInterface();
$fullstack=new fullStack();
echo $fullstack->userInterface();

?>

</body>
</html>`