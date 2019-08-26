<?php

    if($_FILES) {
        $uploadDirectory = "upload_files";
        $uploadFileCopy = $uploadDirectory . basename($_FILES['file']['name']);

        if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFileCopy)) {
            echo 'Archivo copiado con éxito';
        } else {
            echo 'No se pudo cargar el archivo';
        }
    }

?>