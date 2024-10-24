<?php

$jogador = $_POST["opcao"];
$maquina = rand(1,3);

//---------------------------------------------------
$pedra = 'pedra.png';
$papel = 'papel.png';
$tesoura = 'tesoura.png';


// 1 - PEDRA
// 2 - PAPEL
// 3 - TESOURA

    echo "<h2>Escolha Jogador: </h2>";
if ($jogador == 1){
    echo '<img src="' . $pedra . '" alt="Minha Imagem" style="max-width: auto; height: 70px;"<br><br><br><br>';
} 

else if ($jogador == 2){
    echo '<img src="' . $papel . '" alt="Minha Imagem" style="max-width: auto; height: 70px;"<br><br><br><br>';
}

else {
    echo '<img src="' . $tesoura . '" alt="Minha Imagem" style="max-width: auto; height: 70px;"<br><br><br><br>';
}

//--------------------------------------------------
//jogada maquina

    echo "<h2>Escolha maquina: </h2>";   
if ($maquina == 1){
    echo '<img src="' . $pedra . '" alt="Minha Imagem" style="max-width: auto; height: 70px;"<br><br><br><br>';
} 
    
else if ($maquina == 2){
    echo '<img src="' . $papel . '" alt="Minha Imagem" style="max-width: auto; height: 70px;"<br><br><br><br>';
}
    
else {
    echo '<img src="' . $tesoura . '" alt="Minha Imagem" style="max-width: auto; height: 70px;"<br><br><br><br>';
}

//--------------------------------------------------
//Definindo ganhador

if ($jogador == $maquina) {
    echo "<h2>Resultado: Empate!</h2>";
}   else if (
        ($jogador == 1 && $maquina == 3) || // Jogador escolhe Pedra e Máquina escolhe Tesoura
        ($jogador == 2 && $maquina == 1) || // Jogador escolhe Papel e Máquina escolhe Pedra
        ($jogador == 3 && $maquina == 2)    // Jogador escolhe Tesoura e Máquina escolhe Papel
) {
        echo "<h2>Resultado: Você venceu!</h2>";
}   else {
        echo "<h2>Resultado: A Máquina venceu!</h2>";
}




?>