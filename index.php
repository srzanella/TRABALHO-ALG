
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Trabalho ALGORITMOS</title>
  </head>
  <body>
  	<div> </div>
  	<center>
   <form name="form1" method="post" action="trat.php">


  <fieldset enable>
  	
    <legend><b>Tratativa de dados</b></legend>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Posição 1 do vetor</label>
      <input type="text" name="txt1" class="form-control" placeholder="Insira as informações a ser inserida ao vetor">
    </div>


      <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Posição 2 do vetor</label>
      <input type="text" name="txt2" class="form-control" placeholder="Insira as informações a ser inserida ao vetor">
    </div>

      
   <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Posição 3 do vetor</label>
      <input type="text" name="txt3" class="form-control" placeholder="Insira as informações a ser inserida ao vetor">
    </div>


   <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Posição 4 do vetor</label>
      <input type="text" name="txt4" class="form-control" placeholder="Insira as informações a ser inserida ao vetor">
    </div>

   <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Posição 5 do vetor</label>
      <input type="text" name="txt5" class="form-control" placeholder="Insira as informações a ser inserida ao vetor">
    </div>

    <select class="form-select" name="sort" aria-label="Default select example">
          <option value="00">Selecione o Modo De Ordenação</option>
          <option value="11">Insert Sort</option>
          <option value="22">mergeSort</option>
          <option value="33">quick Sort</option>
          <option value="44">Selection Sort</option>
          <option value="55">Shell Sort</option>
          <option value="66">Buble Sort</option>
      </select>



    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="2">
        <label class="form-check-label" for="disabledFieldsetCheck">
         <b> Li e concordo com nem sei o que...</b>
        </label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary my-2">Submit</button>
  </fieldset>
  </div>
</form>
</center>

</body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

  </body>
  <div>
 
 <center>
 	<b>
</b>
</center>

    </div>
</html>













<?php

/*
function inserir($valor1, $valor2, $valor3, $valor4){


$lista = array();

array_push($lista, array(
	$valor1 => $valor2,
	$valor3 => $valor4

));
*/
/*

include "insert.php";
$valor1="nome";
$valor2="abner zanella";
$valor3="idade";
$valor4=24;
$insert2 = inserir($valor1, $valor2, $valor3, $valor4);

print_r ($insert2);


$valor1="nome";
$valor2="lindao";
$valor3="idade";
$valor4=29;
$insert2 = inserir($valor1, $valor2, $valor3, $valor4);


print_r($insert2);




?>
*/