<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Suítes</title>

<!-- Fonte Google -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
/* --- Fonte e Reset --- */
body {
    font-family: 'Inter', sans-serif;
    margin: 0;
    padding: 0;
    /* --- Imagem de fundo --- */
    background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1470&q=80'); /* Coloque a URL da sua imagem aqui */
    background-size: cover;      /* Faz a imagem cobrir toda a tela */
    background-position: center; /* Centraliza a imagem */
    background-attachment: fixed; /* Faz a imagem ficar fixa ao rolar */
}

/* --- Container --- */
.container {
    width: 90%;
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(255,255,255,0.9); /* Fundo semi-transparente para melhor leitura */
    border-radius: 10px;
}

/* --- Header --- */
header h1 {
    text-align: center;
    margin-bottom: 40px;
}

/* --- Galeria --- */
.galeria {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
}

/* --- Cards --- */
.card {
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 20px;
    background-color: #fff;
    transition: transform 0.2s;
}

.card:hover {
    transform: translateY(-5px);
}

/* --- Details / Summary --- */
details summary {
    cursor: pointer;
    font-size: 1.2em;
    font-weight: bold;
    outline: none;
}

details[open] summary::after {
    content: " ▲";
    float: right;
}

summary::after {
    content: " ▼";
    float: right;
}

/* --- Lista de características --- */
ul {
    padding-left: 20px;
    margin-top: 10px;
}

/* --- Botão Reserve --- */
.botao-reserve {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    background: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.2s;
}

.botao-reserve:hover {
    background: #0056b3;
}
</style>
</head>
<body>

<div class="container">
<header>
    <h1>Conheça nossas suítes</h1>
</header>

<section class="galeria">
<?php
$quartos = [
 [
  "titulo" => "Suíte Lopes Mendes (Junior)",
  "descricao" => [
    "Espaço ampliado com área de estar",
    "Cama King ou Queen",
    "Smart TV e Wi-Fi",
    "Ar-condicionado",
    "Banheiro equipado",
    "Frigobar e cafeteira",
    "Café da manhã incluso"
  ]
 ],
 [
  "titulo" => "Suíte Lagoa Azul (Master)",
  "descricao" => [
    "Ambientes separados",
    "Cama Super King",
    "Sala de estar",
    "Closet exclusivo",
    "Varanda privativa",
    "Hidromassagem",
    "Serviço de quarto"
  ]
 ],
 [
  "titulo" => "Suíte Parnaíoca (Presidencial)",
  "descricao" => [
    "Múltiplos ambientes",
    "Sala de jantar",
    "Escritório",
    "Banheira para duas pessoas",
    "Mordomo exclusivo",
    "Automação completa",
    "Vista panorâmica"
  ]
 ]
];

foreach ($quartos as $q) {
    echo "<div class='card'>";
    echo "<details>";
    echo "<summary>{$q['titulo']}</summary>";
    echo "<ul>";
    foreach ($q['descricao'] as $item) {
        echo "<li>{$item}</li>";
    }
    echo "</ul>";
    echo "<a href='#' class='botao-reserve'>Reserve já</a>";
    echo "</details>";
    echo "</div>";
}
?>
</section>

</div>

</body>
</html>
