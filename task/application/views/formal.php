<html>
    <body>
        <div id="container">
            <h1>prodect list</h1>
            <div id="body">
              <ol> <div id="results"></div></ol>
            </div>    
        </div>
    </body>
</html>

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
var total_record = 0;
var total_groups = <?php echo $total_data; ?>;  
$('#results').load("<?php echo base_url() ?>formalcontroller/load_more",
 {'group_no':total_record}, function() {total_record++;});
$(window).scroll(function() {       
              
        if(total_record <= total_groups)
        {
          loading = true; 
          $('.loader_image').show(); 
          $.post('<?php echo site_url() ?>formalcontroller/load_more',{'group_no': total_record},
            function(data){ 
                if (data != "") {                               
                    $("#results").append(data);                 
                    $('.loader_image').hide();                  
                    total_record++;
                }
            });     
        }
    
});
});
</script>
<a href='<?php echo base_url()."usercontroller/logout";?>'> logout </a>