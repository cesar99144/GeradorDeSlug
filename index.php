<?php

   function GeradorSlug($acentos){

       $acentos =  preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N c C"),$acentos);
       $caracteres = array(' & ', 'ª ', '  (', ') ', '(', ')', ' - ', ' / ', ' /', '/ ', '/', ' | ', ' |', '| ', ' | ', '|', '_', '.', ' ');
       return strtolower(str_replace($caracteres, '-', $acentos));
   }

   //Executa apenas quando o botão de submit for acionado
   if(isset($_GET['resultado'])):
      
    $resultado = GeradorSlug($_GET['titulo']);
    echo $resultado;

   endif;

?>

<!DOCTYPE html>
  <html>
	  <head>
        <meta charset="UTF-8">
	  	<title>Gerador de slug</title>
	  </head>
	  <body><br><br>
	  	  <form>
		  	 <input type="text" name="titulo" placeholder="Inserir texto">
		  	 <input type="submit" value="Gerar" name="resultado">
  		  </form>
	  </body>
  </html>