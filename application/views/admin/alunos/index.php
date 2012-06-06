<!DOCTYPE html>
<html lang="en">
    <head>
        <title>teste pg</title>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
    </head>
    <body>
        <div>
            <?php
            echo form_open('alunos/add', array('id' => 'form_aluno'));
            echo form_fieldset('my_form');
            echo 'nome'.form_input('nome_aluno');
            echo 'nota'.form_input('nota_aluno');
            echo form_button(array('type' => 'submit', 'content' => 'enviar'));
            echo form_fieldset_close();
            echo form_close();
            ?>
        </div>

    </body>

        <script type="text/javascript">
            $(document).ready(function(){
                
                var form = $('#form_aluno');
                form.submit(function(){
                    $.post(form.attr('action'), form.serialize(), function(data){
                        alert(data);
                    })
                    return false;
                })
            })
        </script>
    
</html>