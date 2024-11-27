Index.Html

!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial - Sistema RH</title>
    <link rel="stylesheet" href="assets/css/style.css">

<style>
/* assets/css/style.css */

/* Resetando margens e preenchimentos */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Cor de fundo e fonte básica */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
    padding: 20px;
}

/* Cabeçalho */
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    margin-bottom: 20px;
}

header h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

header p {
    font-size: 1.2rem;
}

/* Cards */
.cards {
    display: flex;
    justify-content: space-around;
    margin-top: 30px;
}

.card {
    background-color: #fff;
    padding: 20px;
    width: 30%;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.card h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.card p {
    font-size: 1.2rem;
    font-weight: bold;
    color: #4CAF50;
}

/* Menu de navegação */
.menu {
    display: flex;
    justify-content: center;
    margin-top: 40px;
}

.menu a {
    background-color: #4CAF50;
    color: white;
    padding: 15px 30px;
    margin: 10px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1.1rem;
    text-align: center;
    transition: background-color 0.3s;
}

.menu a:hover {
    background-color: #45a049;
}

/* Responsividade */
@media (max-width: 768px) {
    .cards {
        flex-direction: column;
        align-items: center;
    }

    .card {
        width: 80%;
        margin-bottom: 20px;
    }

    .menu a {
        width: 80%;
        margin: 10px 0;
    }
}


body {
    background-image: url('imagem/foto.jpg'); /* Caminho correto */
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    color: #090c06;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
}

header {
    text-align: center;
    padding: 100px;
    background-color: rgba(0, 0, 0, 0.6);
}

h1 {
    font-size: 2.5rem;
}


h1 {
            font-size: 1rem;
            background-color: #00000073;  /* Cor de fundo */
            color: white;               /* Cor do texto */
            padding: 10px;              /* Espaçamento dentro da caixa */
            text-align: center;         /* Centraliza o texto */
            border-radius: 10px;        /* Cantos arredondados */
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.432);  /* Sombra suave */
            border: 1px solid #000000; /* Borda ao redor da caixa */
            transition: transform 0.3s ease; /* Efeito de transformação */
        }




header {
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    color: #f5f5f5;
    text-align: center;
}
</style>

</head>
<body>

<header>
    <h1>Gestão Comercial S.A</h1>
    <p>Transformando empresas com soluções inteligentes.</p>
</header>

<div class="container">

    <!-- Cards de informações -->
    <div class="cards">
        <div class="card">
            <h3>Total de Funcionários</h3>
            <p>50 Funcionários</p> 
        </div>
    </div>

    <!-- Menu de navegação -->
    <div class="menu">
<a href="views/adicionarFuncionario.html" target="_blank">Adicionar Novo Funcionário</a>
<a href="views/listarFuncionarios.html" target="_blank">Ver Lista de Funcionários</a>
<a href="views/relatorios.html" target="_blank">Relatórios e Estatísticas</a>
<a href="views/ponto.html" target="_blank">Marcação de ponto</a>

    </div>
</div>

</body>
</html>
