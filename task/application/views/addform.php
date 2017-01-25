 <script src="http://localhost:80/task/js/jquery-3.1.1.js"></script>
        <script type="text/javascript">
            
            // Ajax post
            $(document).ready(function() {
                $(".submit").click(function(event) {
                    event.preventDefault();
                    var prodect_name = $("input#prodect").val();
                    var discription= $("input#disc").val();
                    var prodect_image = $('#image').serialize();
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url('admincontroller/add_prodect'); ?>",
                        dataType: 'json',
                        data: {prodect: prodect_name, disc: discription,image:prodect_image},
                        success: function(res) {
                            if (res)
                            {
                                // Show Entered Value
                                jQuery("div#test").show();
                                jQuery("div#value").html(res.prodect_name);
                                jQuery("div#value_pwd").html(res.prodect_disc);
                            }
                        }
                    });
                });
            });
        </script>  
        <?php

echo form_open();
                    
                    // Name Field
                    echo form_label('prodect Name');
                    $data_name = array(
                        'name' => 'prodect',
                        'class' => 'input_box',
                        'placeholder' => 'Please Enter prodect name',
                        'id' => 'prodect'
                    );
                    echo form_input($data_name);
                    echo "<br>";
                    echo "<br>";
                    
                    // Password Field
                    echo form_label('discription');
                    $data_name = array(
                       
                        'name' => 'disc',
                        'class' => 'input_box',
                        'placeholder' => ' enter discription',
                        'id' => 'disc'
                    );
                    echo form_input($data_name);
                    ?>
                </div>
                <input type="file" name="image" id="image">
                <div id="form_button">
                    <?php echo form_submit('submit', 'Submit', "class='submit'"); ?>
                </div>                   
                <?php 
                // Form Close
                echo form_close(); ?>
                <?php
                
                // Display Result Using Ajax
                echo "<div id='test'style='display: none'>";
                echo "<div id='content_result'>";
                echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
                echo "<div id='result_show'>";
                echo "Entered Name :<div id='value'></div>";
                echo "<br>";
                echo "<br>";
                echo "Entered Password :<div id='value_pwd'> </div>";
                echo "<div>";
                echo "</div>";
                echo "</div>";
                ?>


        


<a href='<?php echo base_url()."admincontroller/index";?>'> prodect list </a><br>
<a href='<?php echo base_url()."admincontroller/addform";?>'> add anew prodect </a>
