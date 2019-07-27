<?php
$senha = '123456';
$alg   = PASSWORD_ARGON2I;

//API para Hash de Senhas
//Gerando Hash
$hash = password_hash($senha, $alg);
//Res.: $argon2i$v=19$m=1024,t=2,p=2$Y3pEVmFzazY2aENB...

//Realizando Check de Senha
password_verify($senha, $hash); 
//Res.: true ou false, se senha bate com a gerada no hash

//Mais: php.net/password_hash
