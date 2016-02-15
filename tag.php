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
    if (!$closed) {
        $output = opening_entity($name);
    } else {
        $output = opening_entity($name) . $content . closing_entity($name);
    }
    return $output;
}

function div($content = "")
{
    return tag("div", $content, True);
}
