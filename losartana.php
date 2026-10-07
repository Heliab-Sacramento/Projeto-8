<?php include __DIR__ . '/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <link href="Bootstrap/CSS/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

            <script src="Bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<div class="card shadow p-4 card-body">
<p>• Hipertensão arterial: Reduz a pressão alta ao dilatar os vasos sanguíneos.
• Insuficiência cardíaca: Ajuda o coração a funcionar melhor.
• Proteção renal: Retarda os danos nos rins em pacientes com diabetes tipo 2.
• Proteção cardiovascular: Diminui o risco de derrame (AVC) e infarto em pessoas com o coração crescido (hipertrofia ventricular esquerda).</p>

<div class="clearfix float-end">
    <h2>$Preço</h2>
</div>

<img  class="w-25" src="img/losartana.jpg" alt="">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Digite seu CEP para calcular o frete:</h5>
    <p class="card-text">Calcule o prazo e o valor das suas entregas</p>
            <input type="" name="CEP" id="" class="form-control">
  </div>
</div>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Digite seu CUPOM:</h5>
    <p class="card-text">Digite seus cupons para ganhar descontos</p>
            <input type="" name="Cupon" id="" class="form-control">
  </div>
</div>



<div class="input-group border rounded">
    <button class="btn btn-light border-0 btn-menos" type="button">-</button>

    <button class="btn btn-light border-0 btn-mais" type="button">+</button>
</div>
    <input type="submit" value="Adcionar ao carrinho" class="btn btn-success">
</div>