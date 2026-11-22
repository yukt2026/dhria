<?php
// scripts/fetch-extra-products.php
$base_dir = dirname(__DIR__);

$extra_products = [
    "$base_dir/assets/img/products/ahibero.jpg" => "https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/bractei.jpg" => "https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/gymno.jpg" => "https://images.unsplash.com/photo-1508610048659-a06b669e3321?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/ravensara-aromatica.jpg" => "https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/rosemary.jpg" => "https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/saro.jpg" => "https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/turmeric.jpg" => "https://images.unsplash.com/photo-1615485290382-441e4d049cb5?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/zazahely.jpg" => "https://images.unsplash.com/photo-1600857544200-b2f666a9a2ec?auto=format&fit=crop&w=500&q=80"
];

$ctx = stream_context_create([
    'http' => [
        'timeout' => 15,
        'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
    ]
]);

foreach ($extra_products as $path => $url) {
    if (file_exists($path) && filesize($path) > 1000) {
        echo "Exists: " . basename($path) . "\n";
        continue;
    }
    $content = @file_get_contents($url, false, $ctx);
    if ($content) {
        file_put_contents($path, $content);
        echo "Downloaded: " . basename($path) . "\n";
    } else {
        echo "Failed: " . basename($path) . "\n";
    }
}
echo "Done.\n";
