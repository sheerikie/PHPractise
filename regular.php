<?php
$string="{p}We believe in {br}Christ Jesus{/p}";
if (preg_match('/{p}/',$string)) {
 echo "it exists";
}
else {
    echo "it does not exist";
}


$array=preg_split('//',$string);
print_r ($array);

$text="Here we go again";
$humph=preg_replace('/Here/','There',$text);
echo $humph;

?>
