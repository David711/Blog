
<!DOCTYPE html>
<html>
<head>
     <title> Blog </title>
     <link href="estilosadministrador.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="cabecera">
    <div class="contenidocabecera">
        <a href="http://www.ajeclm.com/" target="blank" class="logo"></a>
        <a href="index.php"><h1> Administrador del Blog </h1></a>
        
    </div>

</div>
    
<div class="fondo">
    <div class="contenido">
        <h2 class="titular"> CREAR NUEVA ENTRADA </h2>


        
        
        <div class="entrada">
             <form action="publicar.php" method="post" enctype="multipart/form-data">
            
           <div class="contenedorimagen">
             <img class="imagen" src="imagenes/comunes/iconoimagen.png" alt="iconoimagen" title="iconoimagen"/>
             <input class="descripcion" required type="text" name="descripcion" placeholder="Describe brevemente la imagen"/>
             <input class="examinar" required type="file" name="imagen"/>
            
           </div> 
           <div class="informacion">
            <input class="fecha" required type="date" name="fecha"/>
            <textarea class="titulo" required name="titulo"  placeholder="Escribe un título"></textarea>
            <textarea class="texto" required name="texto" placeholder="Escribe un texto"></textarea>
            
            <input type="submit" class="boton publ" value="PUBLICAR"/>
                
                    
            </form>
            
           </div>
            
        </div>
        

        
        
        
        
        
    </div>
 
<div class="pie">
    <div class="contenidopie">
         <a href="https://www.jccm.es/" target="blank">
            <img class="junta" src="imagenes/comunes/junta.jpg" alt="logo de la jccm" title="logo de la jccm"/>
         </a>
         
         <a href="https://www.ajeclm.com/programatic/" target="blank">
            <img class="programatic" src="imagenes/comunes/programatic.jpg" alt="programatic" title="programatic"/>
         </a>
         
         <a href="https://www.ajeclm.com/" target="blank">
            <img class="aje" src="imagenes/comunes/aje.jpg" alt="logo de aje" title="logo de aje"/>
         </a>
         
         <a href="https://ec.europa.eu/esf/home.jsp?langId=es" target="blank">
            <img class="europeo" src="imagenes/comunes/europeo.jpg" alt="logo del fondo social europeo" title="logo del fondo social europeo"/>
         </a>
         
        
    </div>
</div>
</div>
    
</body>
</html>

<?php


?>

