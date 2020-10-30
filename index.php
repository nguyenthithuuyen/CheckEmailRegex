<?php
function checkEmail($email)
{
    $patten = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($patten, $email)) {
        return "Email hop le";

    } else {
        return "Email khong hop le";
    }
}
echo checkEmail('a@gmail.com');
echo '<br>';
echo '<br>';
echo checkEmail('ab@yahoo.com');
echo '<br>';
echo '<br>';
echo checkEmail('abc@hotmail.com');
echo '<br>';
echo '<br>';
echo checkEmail('@gmail.com');
echo '<br>';
echo '<br>';
echo checkEmail('@#abc@.com');
echo '<br>';
echo '<br>';
echo checkEmail('@#abc@gmail.com');
