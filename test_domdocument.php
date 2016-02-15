<?php
require_once "mock_data.php";


$begin = microtime();
function write_book($book, $document)
{
    $document = new DOMDocument();
    $document->formatOutput = true;
    $book_list = $document->createElement("table");

    $book_element = $document->createElement("tr");
    $author_element = $document->createElement("td");

    $author_element->appendChild(
        $document->createTextNode($book['author'])
    );

    $book_element->appendChild($author_element);

    $title = $document->createElement("td");
    $title->appendChild(
        $document->createTextNode($book['title'])
    );
    $book_element->appendChild($title);

    $publisher = $document->createElement("td");
    $publisher->appendChild(
        $document->createTextNode($book['publisher'])
    );
    $book_element->appendChild($publisher);

    $book_list->appendChild($book_element);


    $document->appendChild($book_list);

    $p = $document->appendChild($book_list);
    $result = $document->saveHTML();
    return $result;
}
function test_doc(){

}
for ($i = 0; $i < 1000; $i++) {
    foreach ($books as $book) {
        echo write_book($book);
    }
}

echo "\ndom document\n" . (microtime() - $begin);
