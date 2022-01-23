<?php
echo "====single quote===\n";
echo '';

echo "\n";

echo 'my name is : ';
echo 'Satria';
echo "\n\n";

echo "====double quote (use can use escape sequance in double quote)====\n";
echo "Name : ";
echo "Virgil \t Van \t Dijk \n \n";

echo "===multiline String HereDoc===\n";
echo <<<Satria
hello my name is satria
you can call me satria
now we learn about data string type 
in this we are learn data String type kind multiline and this is multiline kind heredoc


Satria;

echo "\n";
echo "===multiline String NowDoc===\n";
echo <<<'Satria'
hello my name is satria
you can call me satria
now we learn about data string type 
in this we are learn data String type kind multiline and this is multiline kind heredoc
Satria;
