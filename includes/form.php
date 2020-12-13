</br>
<section>
        <a href="pdf.php">
            <button class="btn btn-success">PDF</button>
        </a>
    </section>
    </br>
<form enctype="multipart/form-data" action="./index.php" method="POST">
    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Enviar esse arquivo: <input name="userfile" type="file" />
    </br>
    <input type="submit" value="Enviar arquivo" />
</form>