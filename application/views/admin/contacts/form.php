<!DOCTYPE html>
<html lang="en">
    <head>
        <title>add contacts</title>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
    </head>
    <body>
        <div>
            <?php
            echo form_open('contacts/add', array('id' => 'form_contacts'));
            echo form_fieldset('my_form');
            echo 'Name'.form_input('conname').'<br />';
            echo 'Address'.form_input('conaddress').'<br />';
            echo 'City'.form_input('concity').'<br />';
            echo 'Phone'.form_input('conphone').'<br />';
            echo 'Neighborhood'.form_input('conneighborhood').'<br />';
            echo 'Postalcode'.form_input('conpostalcode').'<br />';
            echo 'District'.form_input('condistrict').'<br />';
            echo 'Company?'.form_input('conis_company'.'<br />');
            echo form_button(array('type' => 'submit', 'content' => 'enviar'));
            echo form_fieldset_close();
            echo form_close();
            ?>
        </div>

    </body>

        <script type="text/javascript">
            $(document).ready(function(){
                
                var form = $('#form_contacts');
                form.submit(function(){
                    $.post(form.attr('action'), form.serialize(), function(data){
                        alert(data);
                    })
                    return false;
                })
            })
        </script>
    
</html>