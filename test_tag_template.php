<?php
require_once "mock_data.php";
require_once "tables.php";

function write_book($book)
{
    return table(
        tr(
            td($book["title"]) .
            td($book["author"]) .
            td($book["publisher"])
        )
    );
}

function test_tag()
{
    for ($i = 0; $i < 1000; $i++) {
        foreach ($books as $book) {
            echo write_book($book);
        }
    }
}