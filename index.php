<?php

require 'vendor/autoload.php';

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form.php';
include __DIR__.'/includes/footer.php';



//Upload
    $uploaddir = 'app/xml/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    
    move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);

    $doc = $uploadfile;


//Analisar arquivo e renomear
    $xml = simplexml_load_file($doc);
    
    if(!$xml) {
        echo "Erro ao abrir o arquivo!";
        exit;
    }

    $nfNumber = $xml->NFe->infNFe->ide->nNF;
    var_dump($nfNumber);

    $archiveOld = $doc;
    $archiveNew = "app/new/".$nfNumber.".xml";
    rename($archiveOld, $archiveNew);

//Converter XML para PDF - convertido em XLST


