<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Umentor Desafio Técnico</title>

    <!-- DIFININDO FAVICON -->
    <link rel="shortcut icon" type="image/png" href="/public/image/favicon-32x32.png"/>

    <!-- INCORPORANDO JQUERY -->

    <script src="/public/jquery/jquery-3.7.1.min.js"></script>

    <!-- INCORPORANDO O BOOTSTRAP -->
    <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">    
    <script src="/public/bootstrap/js/bootstrap.js"></script>

    <!-- INCORPORANDO DATATABLE -->
    <link href="/public/datatable/datatables.min.css" rel="stylesheet">
    <script src="/public/datatable/datatables.min.js"></script>

    <!-- INCORPORANDO FONT-AWESOME -->
    <link rel="stylesheet" href="/public/font-awesome/css/font-awesome.min.css">

    <!-- INCORPORANDO SWEETALERT -->
    <script src="/public/sweetalert/sweetalert.min.js"></script>

    <!-- INCORPORANDO CSS PERSONALIZADO -->
    <link rel="stylesheet" href="/public/css/style.css">


    <meta charset="utf-8">

    </head>
  <body>

   <!-- NAVBAR -->
   <?php  include 'view/layout/header.php'; ?>

   <!-- INCLUINDO OS MODAIS -->
   <?php  include 'view/modal/modal-cadastro.php'; ?>
   <?php  include 'view/modal/modal-edit.php'; ?>
   <?php  include 'view/modal/modal-visualiar.php'; ?>
   <?php  include 'view/main.php'; ?>

   </body>
</html>

<script src="public/js/funcoes.js"></script>