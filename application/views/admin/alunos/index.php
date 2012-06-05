<!DOCTYPE html>
<html lang="en">
    <head>
        <title>teste pg</title>
    </head>
    <body>
        <div>
            <?php
            echo form_open('alunos/cad');
            echo form_fieldset('my_form');
            echo 'nome'.form_input('nome');//.br(1);
            echo 'nota'.form_input('nota');//.br(1);
            echo form_submit('submit', 'enviar');
            echo form_fieldset_close();
            echo form_close();
            ?>
        </div>

    </body>
</html>