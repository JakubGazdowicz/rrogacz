<?php

$rok = 2004;

if ($rok % 4 == 0) {
   if ($rok % 100 == 0) {
       if ($rok % 400 == 0) {
           echo "29 dni";
       } else {
           echo "28 dni";
       }
   } else {
       echo "29 dni";
   }
} else {
    echo "28 dni";
}
