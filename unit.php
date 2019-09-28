<?php 

function test_Contains()
{
    $this->assertRegexp('/' . preg_quote($needle) . '/', $haystack);
    $this->assertNotContains("tst", "this is a test string");
}

?>
?>