<?php
require_once "mock_data.php";

function write_book($book)
{
    return <<<BT
    <table>
        <tr>
            <td>
                {$book["title"]}
            </td>
            <td>
                {$book["author"]}
            </td>
            <td>
                {$book["publisher"]}
            </td>
        </tr>
    </table>
BT;
}
function test_heredoc()
{
    for ($i = 0; $i < 1000; $i++) {
        foreach ($books as $book) {
            echo write_book($book);
        }
    }
}