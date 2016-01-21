<?php

function entity($content = "")
{
    return $content;
}

function opening_entity($name)
{
    $tag_prefix = "<";
    $tag_suffix = ">";
    return $tag_prefix . $name . $tag_suffix;
}

function closing_entity($name)
{
    $closing_indicator = "/";
    return opening_entity($closing_indicator . $name);
}

function tag($name = "div", $content = "", $closed = True)
{
    if ($closed) {
        $output = opening_entity($name);
    } else {
        $output = opening_entity($name) . $content . closing_entity($name);
    }
    return $output;
}

$books = array();

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);


$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'PHP Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$books [] = array(
    'title' => 'Podcasting Hacks',
    'author' => 'Jack Herrington',
    'publisher' => "O'Reilly"
);

$document = new DOMDocument();
$document->formatOutput = true;
$book_list = $document->createElement("table");

foreach ($books as $book) {
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
}

$document->appendChild($book_list);

$p = $document->appendChild($book_list);

$result = $document->saveHTML();

echo "result=";
echo $result;