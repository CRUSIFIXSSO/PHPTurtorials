<?php
   //test1.php

   function longdate($timestamp)
   {
       return date("l F jS Y", $timestamp);
       echo longdate(time() - 17 * 24 * 60 * 60);
   }
   
?>