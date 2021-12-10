<?php

/**
 * Arquivo de configurações para conexão com banco de dados
 *
 * @author Gustavo Berwian <gustavo.rberwian@gmail.com>
 */

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'senhaserver2fortedatabase');
define('DB', 'ads');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');