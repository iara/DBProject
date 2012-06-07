<!DOCTYPE html>
<html lang="en">
    <head>
        <title>repositories</title>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
    </head>
    <body>
        <div>
            <?php
            echo form_open($controller.'/add', array('id' => 'form_users'));
            echo form_fieldset('my_form');
            
            echo form_label('Nome','repo_name').form_input('repo_name');
            echo form_label('Description','repo_description').form_input('repo_description').br(2);
            echo form_label('is_public?','repo_is_public').form_checkbox('repo_is_public',1);
            echo form_button(array('type' => 'submit', 'content' => 'enviar'));
            echo form_fieldset_close();
            echo form_close();
            ?>
        </div>

    </body>

        <script type="text/javascript">
            $(document).ready(function(){
                
                var form = $('#form_repositories');
                form.submit(function(){
                    $.post(form.attr('action'), form.serialize(), function(data){
                        alert(data);
                    })
                    return false;
                })
            })
        </script>
    
</html>