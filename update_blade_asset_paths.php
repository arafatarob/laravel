<?php
// Update image/link paths in Blade templates to use Laravel's asset() helper.
$base = __DIR__ . '/arafatPortfolio/resources/views';
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($base));
foreach ($it as $file) {
    if (!$file->isFile() || !preg_match('/\.blade\.php$/', $file->getFilename())) {
        continue;
    }

    $text = file_get_contents($file->getPathname());
    $new = preg_replace_callback(
        '/(href|src)=("|\')(\.\/)?(img\/[^"]+?)\\2/',
        function (array $m) {
            $attr = $m[1];
            $quote = $m[2];
            $path = $m[4];
            $inner = $quote === '"' ? "'" : '"';
            return sprintf('%s=%s{{ asset(%s%s%s) }}%s', $attr, $quote, $inner, $path, $inner, $quote);
        },
        $text
    );

    if ($new !== $text) {
        file_put_contents($file->getPathname(), $new);
        echo "Updated: " . $file->getPathname() . "\n";
    }
}
