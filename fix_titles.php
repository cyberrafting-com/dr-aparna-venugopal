<?php
$file = 'c:/xampp/htdocs/dr-aparna-venugopal/resources/views/home.blade.php';
$content = file_get_contents($file);
$content = preg_replace('/(class="section-title[^"]*")/', '$1 data-aos="zoom-in-up" data-aos-duration="1000"', $content);
// Also animate the main hero h1 if it exists and doesn't have data-aos
$content = preg_replace('/(<h1 class="font-heading display-4 fw-bold")/', '$1 data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="100"', $content);
file_put_contents($file, $content);
echo "Titles updated with animations.";
