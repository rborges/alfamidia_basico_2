<?php
$pessoas = array(
    "Rodrigo" => [
        "Id" => "1",
        "Nome" => "Rodrigo Borges",
        "Idade" => 34,
        "CPF" => "81209860082",
        "Salario" => 1000.50,
        "Ativo" => true,
        "Endereco" => ["Logradouro" => "Rua Dona Amélia",
            "Numero" => "240",
            "Bairro" => "Santa Tereza"]
    ],
    "Fernando" => [
        "Id" => 2,
        "Nome" => "Fernando Andrade",
        "Idade" => "34",
        "CPF" => "5648217ferf5489",
        "Ativo" => true,
        "Endereco" => ["Logradouro" => "Rua Donasss Alzira",
            "Numero" => 280,
            "Casa" => 07]
    ],
    "Outro" => [
        "Id" => 3,
        "Nome" => "Outro Andrade",
        "Idade" => "34",
        "CPF" => "5648217ferf5489",
        "Ativo" => false,
        "Endereco" => ["Logradouro" => "Rua Donasss Alzira",
            "Numero" => 280,
            "Casa" => 07]
        ]);
?>

<table style="width:50%">
    table<tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Idade</td>
        <td>CPF</td>
        <td>Situação</td>
        <td>Logradouro</td>
    </tr>

    <?php
    foreach ($pessoas as $chave => $pessoa) {
        ?>
        <tr>
            <td><?php echo $pessoa["Id"]; ?></td>
            <td><?php echo $pessoa["Nome"]; ?></td>
            <td><?php echo $pessoa["Idade"]; ?></td>
            <td><?php echo $pessoa["CPF"]; ?></td>
            <td><?php echo ($pessoa["Ativo"]) ? "Ativo" : "Inativo"; ?></td>
            <td><?php echo $pessoa["Endereco"]["Logradouro"]; ?></td>
        <?php } ?>
    </tr>



</table>

