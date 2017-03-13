
<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">      

   <?php     

      $nomeBanda              = $_POST['nomeBanda'];

      $linkImagem             = $_POST['linkImagem'];

      $integrante1Nome        = $_POST['integrante1Nome'];

      $integrante1Data        = $_POST['integrante1Data'];

      $integrante1Instrumento = $_POST['integrante1Instrumento'];

      $integrante2Nome        = $_POST['integrante2Nome'];

      $integrante2Data        = $_POST['integrante2Data'];

      $integrante2Instrumento = $_POST['integrante2Instrumento'];

      $integrante3Nome        = $_POST['integrante3Nome'];

      $integrante3Data        = $_POST['integrante3Data'];

      $integrante3Instrumento = $_POST['integrante3Instrumento'];

      $biografiaBanda         = $_POST['biografiaBanda'];

      $corFundo               = $_POST['corFundo'];

      $corTexto               = $_POST['corTexto'];        

    ?>        

    <title> 

      <?php echo $nomeBanda;?> - Biografia 

    </title>  


    <style type='text/css'>

      body {

        color            : <?php echo $corTexto; ?>;

        background-color : <?php echo $corFundo; ?>;        

      }

    </style>

  </head>


  <body>

    <h1 align="center"><?php echo $nomeBanda; ?></h1>

    <p align="center"> 

        <img src   = "<?php echo $linkImagem; ?>" 

             title = "<?php echo $nomeBanda;   ?>" 

            alt   = "<?php echo $nomeBanda;   ?>"> 

    </p>

   

    <hr>

    <h2>Biografia </h2>

    <p><?php echo $biografiaBanda; ?></p>

    <hr>

    <h2>Integrantes </h2>

    <table border='1' align="center">

      <tr>

       <td><?php echo "Nome"?><td> 

        <td><?php echo "Data de nascimento"?><td>

        <td><?php echo "Instrumento"?><td>

      </tr>

      <tr>

        <td><?php echo $integrante1Nome; ?><td> 

        <td><?php echo $integrante1Data; ?><td>

        <td><?php echo $integrante1Instrumento; ?><td>

      </tr>

      <tr>

        <td><?php echo $integrante2Nome; ?><td> 

        <td><?php echo $integrante2Data; ?><td>

        <td><?php echo $integrante2Instrumento; ?><td>

      </tr>

      <tr>

        <td><?php echo $integrante3Nome; ?><td> 

        <td><?php echo $integrante3Data; ?><td>

        <td><?php echo $integrante3Instrumento; ?><td>

      </tr>

      

<html>

    


