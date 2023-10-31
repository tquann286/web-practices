<?php
    require "function.php";
    setPNGHeader();
    $alphabet = "aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789";
    makePNGCaptcha(makeCaptcha($alphabet, 8));
?>