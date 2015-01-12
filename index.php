<!DOCTYPE html>

<!--
  To change this license header, choose License Headers in Project Properties.
  To change this template file, choose Tools | Templates
  and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>COMP4711 - Lab01</title>
    </head>
    <body>
        <?php
        include ('student.php');
        
        $students = array();
        
        foreach ($students as $student) 
            echo $student->toString();
        ?>
    </body>
</html>


