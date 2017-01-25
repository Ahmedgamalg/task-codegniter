<?php
echo form_open('usercontroller/login_validation');
echo validation_errors();
echo "<p> email :";
echo form_input('email');
echo "</p>";
echo "<p> password :";
echo form_password('password');
echo "</p>";
echo "<p>";
echo form_submit('sub_login','login');
echo "</p>";
echo form_close();
?>