<?php

echo "ok";
if(isset($_POST)){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    

    // Aqui você pode adicionar o código para inserir os dados no banco de dados
    // Exemplo:
    // $sql = "INSERT INTO usuarios (nome, email, senha, telefone, endereco, cidade, estado) VALUES ('$nome', '$email', '$senha', '$telefone', '$endereco', '$cidade', '$estado')";
}
//             <br>
//             <input type="text" placeholder="Telefone" required>
//             <br>
//             <input type="text" placeholder="Endereço" required>
//             <br>
//             <input type="text" placeholder="Cidade" required>
//             <br>
//             <input type="text" placeholder="Estado" required>
//             <br> 