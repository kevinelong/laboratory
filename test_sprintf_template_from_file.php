<?php
require_once "mock_data.php";
$template = file_get_contents("template.html");

function write_book($book)
{
    global $template;
    return sprintf($template, $book["title"], $book["author"], $book["publisher"]);
}

function test_sprintf()
{
    for ($i = 0; $i < 1000; $i++) {
        foreach ($books as $book) {
            echo write_book($book);
        }
    }
}