<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XS | Formulário</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .btoes{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            color: #333;
        }
        form input{
            width: 300px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form button{
            width: 320px;
            padding: 10px;
            background-color:rgba(75, 75, 75, 0.83);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        form button:hover{
            background-color: #0056b3;
        }
        h1{
            font-size: 2em;
            margin-bottom: 20px;
        }
        input{
            width: 300px;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button{
            width: 320px;
            padding: 10px;
            background-color:rgba(75, 75, 75, 0.83);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover{
            background-color: #0056b3;
        }
        @media (max-width: 600px) {
            input, button {
                width: 90%;
            }
        }
        @media (max-width: 400px) {
            h1 {
                font-size: 1.5em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 300px) {
            h1 {
                font-size: 1.2em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 200px) {
            h1 {
                font-size: 1em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 100px) {
            h1 {
                font-size: 0.8em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 50px) {
            h1 {
                font-size: 0.6em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 25px) {
            h1 {
                font-size: 0.4em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 10px) {
            h1 {
                font-size: 0.2em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 5px) {
            h1 {
                font-size: 0.1em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 1px) {
            h1 {
                font-size: 0.05em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 0.5px) {
            h1 {
                font-size: 0.025em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 0.1px) {
            h1 {
                font-size: 0.0125em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 0.01px) {
            h1 {
                font-size: 0.00625em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 0.001px) {
            h1 {
                font-size: 0.003125em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 0.0001px) {
            h1 {
                font-size: 0.0015625em;
            }
            input, button {
                width: 100%;
            }
        }
        @media (max-width: 0.00001px) {
            h1 {
                font-size: 0.00078125em;
            }
            input, button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div>
        <h1>Junte-se</h1>
        </div>
        <form action="cria_usuario.php" method="post">
            <input type="text" placeholder="Nome " required>
            <br>
            <input type="text" placeholder="Usuario" required>
            <br>
            <input type="password" placeholder="Senha" required>
            <br>
            <input type="email" placeholder="Email" required>
            <button>Enviar</button>
            <br>
            <a href="./login.php">
                <button>Login</button>
            </a>
           
        </form>
       
        <div class="btoes"> 
           
        </div>
   
</body>
</html>