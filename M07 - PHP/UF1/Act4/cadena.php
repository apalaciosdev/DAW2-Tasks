<?php
  function calcula_extension($string) {
    return pathinfo($string, PATHINFO_EXTENSION);
  }

  function tipus_fitxer($string) {
    $tipus = "";

    switch (strtoupper($string)) {
      case 'PDF':
        $tipus = "Documento Adobe PDF";
        break;
      
      case 'TXT':
        $tipus = "Documento de texto";
        break;
      
      case 'HTML':
        $tipus = "Documento HTML";
        break;
        
      case 'HTM':
          $tipus = "Documento HTML";
          break;
          
      case 'PPT':
        $tipus = "Presentación Microsoft Powerpoint";
        break;
      
      case 'DOC':
        $tipus = "Documento Microsoft Word";
        break;
      
      case 'GIF':
        $tipus = "Imagen GIF";
        break;
      
      case 'JPG':
        $tipus = "Imagen JPG";
        break;
      
      case 'ZIP':
        $tipus = "Archivo comprimido ZIP";
        break;
      
      default:
        $tipus = "Archivo " . strtoupper($string);
        break;
    }
    return $tipus;
  }
?>