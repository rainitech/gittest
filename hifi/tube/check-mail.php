<?php

if (filter_var('test+email@fexample.com', FILTER_VALIDATE_EMAIL)) {
    echo "Your email is ok.";
} else {
    echo "Wrong email address format.";
}

?>