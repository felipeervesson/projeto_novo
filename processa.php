<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */$nome = $_POST["user"];
 $nome = $_POST["pass"];
	
	if(empty($user) or empty($pass)){
		echo "Insira seu nome! e Senha";
	}
	else{
		echo "Parabens!";
	}


?>