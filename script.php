<?php
$dir = 'c:\xampp\htdocs\dr-gaurav-das\resources\views\services';
$files = glob($dir . '/*.blade.php');

foreach($files as $f) {
    if(basename($f) == 'kidney-surgery.blade.php') continue;
    $content = file_get_contents($f);
    
    // 1. Remove {{-- and --}} around the img tag
    $content = preg_replace('/\{\{--\s*(<img[^>]+>)\s*--\}\}/i', '$1', $content);
    
    // 2. Wrap the <div class="col-lg-5 ... block with <!-- and -->
    // We match <div class="col-lg-5 ... and the next two </div> tags since the image is nested inside two divs
    // Actually, looking at the HTML structure:
    // <div class="col-lg-5...">
    //      <div class="position-relative...">
    //          <div class="position-absolute..."></div>
    //          <img ...>
    //      </div>
    // </div>
    // So there are 3 divs opened, 1 closed immediately, then 2 closed at the end.
    // The sequence of closing tags is </div>\s*</div>
    
    $pattern = '/(<div\s+class=["\'][^"\']*col-lg-5[^>]*>[\s\S]*?<\/div>\s*<\/div>)/i';
    
    $content = preg_replace_callback($pattern, function($matches) {
        $block = $matches[1];
        if (strpos($block, '<!--') !== false && strpos($block, '-->') !== false) {
            return $block; // Already commented
        }
        return "<!--\n" . $block . "\n-->";
    }, $content);
    
    file_put_contents($f, $content);
    echo "Updated " . basename($f) . "\n";
}
