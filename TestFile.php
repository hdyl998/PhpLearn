<?php


$data=file('../1.txt');

$n=count($data);
        
print $n."<br/>";

$rand= rand(0,($n-1));

print trim($data[$rand]);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
