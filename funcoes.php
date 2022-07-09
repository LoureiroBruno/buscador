<?php

function exibeMensagem(string $mensagem)
{
    echo "{$mensagem} . </br>";
}

function dataAtual()
{
    $agora = getdate();
    echo "Dia: {$agora['mday']}:{$agora['month']}:{$agora['year']} | Hora: {$agora['hours']}:{$agora['minutes']}:{$agora['seconds']}";
}
