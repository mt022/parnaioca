<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Reserva - Pousada</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
   <style>
/* ===== RESET ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

/* ===== BODY ===== */
body {
    min-height: 100vh;
    background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* imagem fixa */
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}


/* ===== CONTAINER ===== */
.container {
    width: 100%;
    max-width: 720px;
}

/* ===== TÍTULO (Reserva de Quarto) ===== */
.container h2 {
    display: block;
    width: 60%;          /* largura menor que o container */
    margin: 0 auto 30px; /* centraliza horizontalmente e mantém espaçamento abaixo */
    text-align: center;

    font-size: 2rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.5px;

    background: linear-gradient(90deg, #ff7e5f, #feb47b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    padding: 18px 0; 
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.35);
    backdrop-filter: blur(8px);
    border: 2px solid rgba(255,255,255,0.2);
    cursor: default;
}


/* ===== FORMULÁRIO (CARD GLASS) ===== */
form {
    background: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(8px);
    padding: 35px 30px;
    border-radius: 20px;
    width: 100%;
    box-shadow: 0 8px 25px rgba(0,0,0,0.6);
    border: 2px solid rgba(255,255,255,0.15);
}

/* ===== LABELS ===== */
label {
    display: block;
    margin-top: 16px;
    font-weight: 600;
    letter-spacing: 0.3px;
}

/* ===== INPUTS / SELECT ===== */
input,
select {
    width: 100%;
    padding: 12px 15px;
    margin-top: 6px;
    border-radius: 12px;
    border: none;
    background: rgba(255,255,255,0.12);
    color: #fff;
    font-size: 1rem;
    transition: all 0.3s ease;
}

select option {
    color: #000;
}

/* ===== FOCUS ===== */
input:focus,
select:focus {
    outline: none;
    background: rgba(255,255,255,0.2);
    transform: scale(1.02);
}

/* ===== INPUT READONLY ===== */
input[readonly] {
    opacity: 0.7;
    cursor: not-allowed;
}

/* ===== BOTÃO (IGUAL AO PADRÃO DOS BOTÕES DA GALERIA) ===== */
button {
    width: 100%;
    margin-top: 30px;
    padding: 14px;
    border: none;
    border-radius: 30px;
    font-size: 1.1rem;
    font-weight: 700;
    cursor: pointer;
    color: #fff;
    background: linear-gradient(90deg, #ff7e5f, #feb47b);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

button:hover {
    transform: scale(1.06);
    box-shadow: 0 6px 18px rgba(0,0,0,0.45);
}

/* ===== RESPONSIVO ===== */
@media (max-width: 600px) {
    .container h2 {
        font-size: 1.8rem;
    }

    form {
        padding: 25px 20px;
    }
}

/* ===== FIELDSET ESTILIZADO ===== */
fieldset {
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 15px;
    padding: 20px 25px 25px 25px;
    margin-top: 25px;
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.4);
    position: relative;
    transition: all 0.3s ease;
}

/* Hover suave nos fieldsets */
fieldset:hover {
    border-color: rgba(255, 255, 255, 0.6);
    box-shadow: 0 6px 20px rgba(0,0,0,0.5);
}

/* ===== LEGEND ESTILIZADO ===== */
legend {
    font-size: 1.3rem;
    font-weight: 700;
    color: #ffb86c; /* Destaque laranja suave */
    padding: 0 12px;
    background: rgba(0, 0, 0, 0.6);
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.3);
    letter-spacing: 1px;
}

/* ===== SEPARADOR INTERNO ===== */
.apartamento,
.frigobar-item {
    border-top: 1px solid rgba(255,255,255,0.25);
    margin-top: 20px;
    padding-top: 15px;
}

/* ===== LABELS (MAIS VISÍVEIS) ===== */
label {
    display: block;
    margin-top: 16px;
    font-weight: 600;
    letter-spacing: 0.5px;
    color: #f1f1f1;
}

/* INPUTS/SELECT (pequeno ajuste para destacar mais) */
input,
select {
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.3);
    padding: 12px 15px;
    border-radius: 12px;
    color: #fff;
    font-size: 1rem;
    transition: all 0.3s ease;
}

input:focus,
select:focus {
    background: rgba(255,255,255,0.25);
    border-color: #ffb86c;
    transform: scale(1.02);
}

/* BOTÕES DE ADICIONAR ITENS (destacar mais) */
button[type="button"] {
    background: linear-gradient(90deg, #ffa94d, #ff7e5f);
    margin-top: 15px;
}

#addEstacionamentoBtn {
    background: linear-gradient(90deg, #ffa94d, #ff7e5f);
    color: #fff;
    padding: 12px 15px;
    border: none;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
    margin-top: 10px;
    transition: all 0.3s ease;
    display: inline-block;
}

#addEstacionamentoBtn:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 15px rgba(0,0,0,0.4);
}

.frigobar-options {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 10px;
}

.frigobar-options h4 {
    margin-top: 15px;
    margin-bottom: 5px;
    color: #ffb86c;
    font-size: 1.1rem;
    font-weight: 700;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
}

.frigobar-options label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 500;
    color: #f1f1f1;
}

.frigobar-options input[type="number"] {
    width: 60px;
    padding: 6px 8px;
    border-radius: 8px;
    border: 1px solid rgba(255,255,255,0.3);
    background: rgba(255,255,255,0.12);
    color: #fff;
    font-weight: 600;
}

#confirmarFrigobar {
    width: 100%;
    margin-top: 20px;
    padding: 14px;
    border: none;
    border-radius: 30px;
    font-size: 1.1rem;
    font-weight: 700;
    cursor: pointer;
    color: #fff;
    background: linear-gradient(90deg, #ffa94d, #ff7e5f); /* gradiente verde */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

#confirmarFrigobar:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 18px rgba(0,0,0,0.45);
}


</style>
</head>

<body>

<div class="container">
 
<h2>Reserva do quarto</h2>

<form id="reservaForm">

  <fieldset>
    <legend>Informações da Reserva</legend>
    <label>Data do check-in: <input type="date" id="checkin" name="checkin" required></label>
    <label>Data do check-out: <input type="date" id="checkout" name="checkout" required></label>
    <label>Horário previsto de chegada: <input type="time" name="hora_chegada" required></label>
    <label>Número de diárias: <input type="number" id="diarias" name="diarias" readonly></label>
  </fieldset>

  <fieldset>
    <legend>Quantidade de Hóspedes</legend>
    <label>Adultos: <input type="number" name="adultos" min="1" value="1" required></label>
    <label>Crianças: <input type="number" name="criancas" min="0" value="0"></label>
  </fieldset>

  <fieldset>
  <legend>Apartamento</legend>
  <div class="apartamento" id="apartamento1">
    <label>Hóspedes adultos: <input type="number" name="adultos_1" min="1" value="1" required></label>
    <label>Crianças: <input type="number" name="criancas_1" min="0" value="0"></label>
    <fieldset>
  <legend>Frigobar</legend>
  
  <div class="frigobar-item">
    <label>Selecione os produtos desejados:</label>
    <div class="frigobar-options">
      <!-- SUCOS -->
      <h4>🍹 Sucos</h4>
      <label><input type="number" name="frigobar[suco_laranja]" min="0" value="0"> Suco de Laranja - R$5,00</label>
      <label><input type="number" name="frigobar[suco_abacaxi]" min="0" value="0"> Suco de Abacaxi - R$5,50</label>
      <label><input type="number" name="frigobar[suco_manga]" min="0" value="0"> Suco de Manga - R$6,00</label>
      <label><input type="number" name="frigobar[suco_morango]" min="0" value="0"> Suco de Morango - R$5,50</label>
      <label><input type="number" name="frigobar[suco_uva]" min="0" value="0"> Suco de Uva - R$6,00</label>
      <label><input type="number" name="frigobar[suco_caju]" min="0" value="0"> Suco de Caju - R$5,50</label>
      <label><input type="number" name="frigobar[suco_melancia]" min="0" value="0"> Suco de Melancia - R$5,00</label>
      <label><input type="number" name="frigobar[suco_limão]" min="0" value="0"> Suco de Limão - R$5,50</label>
      <label><input type="number" name="frigobar[suco_pitanga]" min="0" value="0"> Suco de Pitanga - R$6,00</label>
      <label><input type="number" name="frigobar[suco_coco]" min="0" value="0"> Suco de Coco - R$6,00</label>

      <!-- REFRIGERANTES -->
      <h4>🥤 Refrigerantes</h4>
      <label><input type="number" name="frigobar[coca]" min="0" value="0"> Coca-Cola - R$6,50</label>
      <label><input type="number" name="frigobar[pepsi]" min="0" value="0"> Pepsi - R$6,50</label>
      <label><input type="number" name="frigobar[fanta]" min="0" value="0"> Fanta Laranja - R$6,00</label>
      <label><input type="number" name="frigobar[sprite]" min="0" value="0"> Sprite - R$6,00</label>
      <label><input type="number" name="frigobar[guaraná]" min="0" value="0"> Guaraná Antarctica - R$5,50</label>

      <!-- BEBIDAS ALCOÓLICAS -->
      <h4>🍷 Bebidas Alcoólicas</h4>
      <label><input type="number" name="frigobar[cerveja]" min="0" value="0"> Cerveja Lata - R$8,00</label>
      <label><input type="number" name="frigobar[vinho]" min="0" value="0"> Vinho Tinto 375ml - R$25,00</label>
      <label><input type="number" name="frigobar[vodka]" min="0" value="0"> Vodka 50ml - R$15,00</label>
      <label><input type="number" name="frigobar[whisky]" min="0" value="0"> Whisky 50ml - R$20,00</label>
      <label><input type="number" name="frigobar[gin]" min="0" value="0"> Gin 50ml - R$18,00</label>

      <button type="button" id="confirmarFrigobar">Confirmar Compra</button>

    </div>
  </div>
</fieldset>

  </div>
</fieldset>

<fieldset>
  <legend>Estacionamento <span style="font-weight:400; font-size:0.9rem; color:#ccc;">(Opcional)</span></legend>
  
  <button type="button" id="addEstacionamentoBtn">Adicionar Estacionamento</button>

  <div id="estacionamentoContainer" style="margin-top:15px; display:none;">
    <label>Modelo do carro: <input type="text" name="modelo_carro"></label>
    <label>Placa: <input type="text" name="placa_carro"></label>
    <p style="font-size:0.85rem; color:#ffb86c; margin-top:8px;">
      Atenção: Prezado cliente, o estabelecimento não se responsabiliza por qualquer dano, furto ou avaria no veículo e só é permitido um carro por cada reserva. Atenciosamente, Pousada Parnaioca Mateus. 
    </p>
  </div>
</fieldset>

  <button type="submit">Continuar sua Reserva</button>
</form>

<script>
let apartamentoCount = 0;

function adicionarApartamento() {
  apartamentoCount++;
  const container = document.getElementById('apartamentosContainer');
  const div = document.createElement('div');
  div.className = 'apartamento';
  div.id = 'apartamento' + apartamentoCount;

  div.innerHTML = `
    <h3>Apartamento ${apartamentoCount}</h3>
    <label>Hóspedes adultos: <input type="number" name="adultos_${apartamentoCount}" min="1" value="1" required></label>
    <label>Crianças: <input type="number" name="criancas_${apartamentoCount}" min="0" value="0"></label>
    <fieldset>
      <legend>Frigobar</legend>
      <div id="frigobarContainer${apartamentoCount}"></div>
      <button type="button" onclick="adicionarItemFrigobar(${apartamentoCount})">Adicionar Item do Frigobar</button>
    </fieldset>
  `;
  container.appendChild(div);
}

function adicionarItemFrigobar(apartamentoId) {
  const container = document.getElementById('frigobarContainer' + apartamentoId);
  const div = document.createElement('div');
  div.className = 'frigobar-item';

  div.innerHTML = `
    <label>Nome do item: <input type="text" name="item_nome_${apartamentoId}[]" required></label>
    <label>Valor: <input type="number" name="item_valor_${apartamentoId}[]" step="0.01" required></label>
  `;
  container.appendChild(div);
}

// Calcula número de diárias automaticamente
document.getElementById('checkin').addEventListener('change', calcularDiarias);
document.getElementById('checkout').addEventListener('change', calcularDiarias);

function calcularDiarias() {
  const checkin = new Date(document.getElementById('checkin').value);
  const checkout = new Date(document.getElementById('checkout').value);
  if (checkin && checkout && checkout > checkin) {
    const diffTime = Math.abs(checkout - checkin);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
    document.getElementById('diarias').value = diffDays;
  } else {
    document.getElementById('diarias').value = '';
  }
}

const addEstacionamentoBtn = document.getElementById('addEstacionamentoBtn');
const estacionamentoContainer = document.getElementById('estacionamentoContainer');

addEstacionamentoBtn.addEventListener('click', () => {
  estacionamentoContainer.style.display = estacionamentoContainer.style.display === 'none' ? 'block' : 'none';
});

</script>

</body>
</html>
