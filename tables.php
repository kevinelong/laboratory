<?php
require "tag.php";

function table($content = "")
{
    return tag("table", $content, True);
}

function tr($content = "")
{
    return tag("tr", $content, True);
}

function td($content = "")
{
    return tag("td", $content, True);
}

function th($content = "")
{
    return tag("th", $content, True);
}
