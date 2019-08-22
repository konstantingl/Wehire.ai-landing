<?php
if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['company'])) {
    mail("konstantin@wehire.ai", "New form submit from" .$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['company']);
}