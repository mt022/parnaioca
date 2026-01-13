<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Galeria | Parnaioca Mateus</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Inter', sans-serif;
}
body{
    min-height:100vh;
    background-image:url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
    background-size:cover;
    background-position:center;
    padding:20px;
    color:#fff;
}
.container{
    max-width:1200px;
    margin:auto;
}
header{
    display:flex;
    justify-content:center;
    margin-bottom:50px;
}
header h1{
    font-size:2.2rem;
    background:linear-gradient(90deg,#ff7e5f,#feb47b);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
    padding:20px 30px;
    border-radius:15px;
    box-shadow:0 6px 15px rgba(0,0,0,.35);
}
.galeria{
    display:grid;
    grid-template-columns:repeat(auto-fill,minmax(260px,1fr));
    gap:25px;
}
.card{
    position:relative;
    overflow:hidden;
    border-radius:18px;
    cursor:pointer;
}
.card img{
    width:100%;
    height:260px;
    object-fit:cover;
    transition:.5s;
}
.card:hover img{
    transform:scale(1.1);
}
.descricao {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 20px;
    background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px; /* espaço entre título, preço e botão */
}

.botao-reserve-card {
    display: inline-block;
    padding: 12px 28px;      /* maior padding para ficar mais chamativo */
    font-size: 1rem;         /* fonte maior */
    font-weight: 700;        /* mais negrito */
    color: #fff;
    text-decoration: none;
    border-radius: 30px;
    background: linear-gradient(90deg,#ff1a1a,#ff7e5f);
    box-shadow: 0 4px 15px rgba(0,0,0,0.5); /* sombra para se destacar */
    transition: transform 0.3s, box-shadow 0.3s;
}

.botao-reserve-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.6);
}

#modal{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.85);
    display:none;
    justify-content:center;
    align-items:center;
    z-index:100;
}
.fechar{
    position:absolute;
    top:25px;
    right:30px;
    font-size:2rem;
    cursor:pointer;
}
.modal-flex{
    display:flex;
    gap:30px;
    max-width:900px;
    background:#000;
    padding:25px;
    border-radius:20px;
}
.modal-imagem{
    flex:1;
    cursor:zoom-in;
}
.modal-imagem img{
    width:100%;
    border-radius:15px;
    transition:.4s;
}
.modal-imagem.zoom img{
    transform:scale(1.5);
}
.modal-info{
    flex:1;
}
.botao-reserve{
    display:inline-block;
    margin-top:15px;
    padding:10px 20px;
    background:#ff1a1a;
    color:#fff;
    text-decoration:none;
    border-radius:10px;
}
</style>
</head>

<body>
<div class="container">
<header>
<h1>Reserve o seu quarto</h1>
</header>

<section class="galeria">
<?php
$pasta = "img/";
$arquivos = scandir($pasta);

$quartos = [ [ "titulo" => "Apartamento 1", "descricao" => "Quarto casal com vista para o mar, cama queen, ar-condicionado, banheiro e varanda.", "preco" => "R$ 350,00 / noite" ],

[ "titulo" => "Apartamento 2", "descricao" => "Quarto casal com vista para o mar, cama queen, ar-condicionado, banheiro e varanda.", "preco" => "R$ 350,00 / noite" ],

[ "titulo" => "Apartamento 3", "descricao" => "Quarto casal com vista para o mar, cama queen, ar-condicionado, banheiro e varanda.", "preco" => "R$ 380,00 / noite" ],

[ "titulo" => "Apartamento 4", "descricao" => "Quarto casal com vista para o mar, cama queen, ar-condicionado, frigobar, banheiro e varanda.", "preco" => "R$ 420,00 / noite" ],

[ "titulo" => "Apartamento 5", "descricao" => "Quarto casal com vista para o mar, cama queen, ar-condicionado, frigobar, banheiro e varanda.", "preco" => "R$ 420,00 / noite" ],

[ "titulo" => "Apartamento 6", "descricao" => "Quarto casal com vista para o mar, cama queen, frigobar, ar-condicionado, banheiro e varanda.", "preco" => "R$ 400,00 / noite" ],

[ "titulo" => "Apartamento 7", "descricao" => "Quarto casal, banheiro privativo, ar condicionado, frigobar.", "preco" => "R$ 280,00 / noite" ],

[ "titulo" => "Apartamento 8", "descricao" => "Quarto casal, banheiro privativo, ar condicionado, frigobar.", "preco" => "R$ 280,00 / noite" ],

[ "titulo" => "Apartamento 9", "descricao" => "Suíte completa com cama king size, TV, frigobar e ar-condicionado.", "preco" => "R$ 520,00 / noite" ] 
];

$contador = 0;

foreach($arquivos as $arquivo){
    if($arquivo != "." && $arquivo != ".."){
        $ext = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
        if(in_array($ext, ["jpg","png","jpeg"])){
            $q = $quartos[$contador] ?? ["titulo"=>"Apartamento","descricao"=>"","preco"=>""];
            echo '
            <div class="card">
                <img src="'.$pasta.$arquivo.'" 
                     data-titulo="'.$q['titulo'].'"
                     data-descricao="'.$q['descricao'].'">
                <div class="descricao">
                    <strong>'.$q['titulo'].'</strong><br>
                    <span>'.$q['preco'].'</span><br>
                    <a href="#" class="botao-reserve-card">Visite aqui</a>
                </div>
            </div>';
            $contador++;
        }
    }
}
?>
</section>
</div>

<div id="modal">
<span class="fechar">&times;</span>
<div class="modal-flex">
    <div class="modal-imagem"><img></div>
    <div class="modal-info">
        <h2 id="modal-titulo"></h2>
        <p id="modal-descricao"></p>
        <a href="#" class="botao-reserve">Reserve já</a>
    </div>
</div>
</div>

<script>
const modal = document.getElementById('modal');
const modalImg = document.querySelector('.modal-imagem img');
const modalTitulo = document.getElementById('modal-titulo');
const modalDescricao = document.getElementById('modal-descricao');
const fechar = document.querySelector('.fechar');

document.querySelectorAll('.card').forEach(card=>{
    card.addEventListener('click',()=>{
        const img = card.querySelector('img');
        modalImg.src = img.src;
        modalTitulo.textContent = img.dataset.titulo;
        modalDescricao.textContent = img.dataset.descricao;
        modal.style.display = 'flex';
    });
});

fechar.onclick = ()=> modal.style.display = 'none';

modal.onclick = e=>{
    if(e.target === modal) modal.style.display = 'none';
};

document.querySelector('.modal-imagem').onclick = ()=>{
    document.querySelector('.modal-imagem').classList.toggle('zoom');
};
</script>

</body>
</html>
