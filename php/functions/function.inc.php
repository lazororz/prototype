<?php

function regenerate() {
    $_SESSION['code'] = uniqid();
    $_SESSION['code_time'] = time();
}

