<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

$my_path = '/home/rod/PhpstormProjects/PHP/Homework/deletethis/';
delete($my_path);
function delete($path)
{
    if (is_dir($path)) {
        $temp = opendir($path);
        while ($newTemp = readdir($temp)) {
            if ($newTemp == '.' or $newTemp == '..')
                continue;

            if (is_file($newTemp)) {
                unlink("$path/$newTemp");
            }
            else {
                delete("$path/$newTemp");
            }
        }
        closedir($temp);
        rmdir($path);
        echo 'Done';
    } else {
        unlink($path);
        echo 'Done';
    }
}


