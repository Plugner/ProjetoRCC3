<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Revoshop</title>
  <!-- FONT OPEN SANS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS -->
  <link rel="stylesheet" href="/css/app.css">
  <style>
    /* Estilos para a tela de carrinho */
    #cart {
      display: none;
      border: 1px solid #ccc;
      padding: 10px;
      position: absolute;
      top: 50px;
      right: 10px;
      background-color: #fff;
      z-index: 1;
    }

    /* Estilos para os itens do carrinho */
    #cart-items {
      list-style-type: none;
      padding: 0;
    }
  </style>
</head>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/contato/support-icon.php");