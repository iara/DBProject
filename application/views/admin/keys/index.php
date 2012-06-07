<!DOCTYPE html>
<html lang="en">
    <head>
        <title>repositories</title>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
    </head>
    <body>
        <div>
            <?php
            echo form_open($controller.'/add', array('id' => 'form_keys'));
            echo form_fieldset('my_form');
            echo 'nome'.form_input('nome_keys');
            echo 'nota'.form_input('nota_keys');
            echo form_button(array('type' => 'submit', 'content' => 'enviar'));
            echo form_fieldset_close();
            echo form_close();
            ?>
        </div>

    </body>

        <script type="text/javascript">
            $(document).ready(function(){
                
                var form = $('#form_keys');
                form.submit(function(){
                    $.post(form.attr('action'), form.serialize(), function(data){
                        alert(data);
                    })
                    return false;
                })
            })
        </script>
    
</html>