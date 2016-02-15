<?php

$foo = "bar";

$final =  <<<TEST_CONTENT
Now is the time
for all good people
to come to the aid
of their $foo.
TEST_CONTENT;

echo $final;