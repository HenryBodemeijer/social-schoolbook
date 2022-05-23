<?php

function file_validation($path)
{
    $a = getimagesize($path);
    $image_type = $a[2];

    if(in_array($image_type , array(IMAGETYPE_JPEG ,IMAGETYPE_PNG)))
    {
        return true;
    }
    return false;
}