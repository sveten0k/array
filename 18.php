
<?php

/*
 * Написать функцию, которая будет возвращать расширение файла из имени (делать через массивы)
 * function extension($fileName){
 *      .....
 *      return $extension;
 * }
 *
 * extension("image.jpg"); // jpg
 * extension("Мой документ.пдф"); //пдф
 * extension("Лето 2019.02.31.gif"); // gif
 */

function extension($fileName){
    $extension = explode(".",$fileName);
      return end($extension);
  }

echo extension("image.jpg")."<br>"; // jpg
echo extension("Мой документ.пдф")."<br>"; //пдф
echo extension("Лето 2019.02.31.gif")."<br>"; // gif
