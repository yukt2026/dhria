<?php
// scripts/fetch-assets.php
$base_dir = dirname(__DIR__);

// 1. Create SVGs for Certifications
$usda_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" width="120" height="120">
  <circle cx="60" cy="60" r="58" fill="#1b5e20" stroke="#2e7d32" stroke-width="2"/>
  <circle cx="60" cy="60" r="48" fill="#ffffff"/>
  <path d="M60 14 A46 46 0 0 1 106 60 L14 60 A46 46 0 0 1 60 14 Z" fill="#8d6e63"/>
  <path d="M14 60 A46 46 0 0 0 60 106 A46 46 0 0 0 106 60 Z" fill="#2e7d32"/>
  <rect x="24" y="47" width="72" height="26" rx="4" fill="#ffffff" stroke="#1b5e20" stroke-width="1.5"/>
  <text x="60" y="65" font-family="'Helvetica Neue', Arial, sans-serif" font-size="14" font-weight="900" fill="#1b5e20" text-anchor="middle" letter-spacing="1">USDA</text>
  <text x="60" y="86" font-family="'Helvetica Neue', Arial, sans-serif" font-size="9" font-weight="800" fill="#ffffff" text-anchor="middle" letter-spacing="1.5">ORGANIC</text>
</svg>
SVG;

$ecocert_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" width="120" height="120">
  <circle cx="60" cy="60" r="56" fill="#ffffff" stroke="#e53935" stroke-width="3"/>
  <circle cx="60" cy="60" r="50" fill="#ffffff" stroke="#e53935" stroke-width="1" stroke-dasharray="2,2"/>
  <text x="60" y="55" font-family="'Helvetica Neue', Arial, sans-serif" font-size="12" font-weight="900" fill="#c62828" text-anchor="middle" letter-spacing="1">ECOCERT</text>
  <path d="M35 68 C45 60, 75 60, 85 68 C75 75, 45 75, 35 68 Z" fill="#e53935"/>
  <text x="60" y="85" font-family="'Helvetica Neue', Arial, sans-serif" font-size="7.5" font-weight="700" fill="#c62828" text-anchor="middle" letter-spacing="0.5">ORGANIC</text>
</svg>
SVG;

$eu_organic_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 100" width="150" height="100">
  <rect width="150" height="100" rx="8" fill="#4caf50"/>
  <!-- Leaf made of 12 stars -->
  <g fill="#ffffff">
    <circle cx="75" cy="22" r="3"/>
    <circle cx="92" cy="28" r="3"/>
    <circle cx="106" cy="40" r="3"/>
    <circle cx="112" cy="56" r="3"/>
    <circle cx="102" cy="72" r="3"/>
    <circle cx="85" cy="80" r="3"/>
    <circle cx="65" cy="80" r="3"/>
    <circle cx="48" cy="72" r="3"/>
    <circle cx="38" cy="56" r="3"/>
    <circle cx="44" cy="40" r="3"/>
    <circle cx="58" cy="28" r="3"/>
    <circle cx="75" cy="50" r="3"/>
  </g>
</svg>
SVG;

$iso_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 120" width="120" height="120">
  <circle cx="60" cy="60" r="56" fill="#ffffff" stroke="#003893" stroke-width="3"/>
  <text x="60" y="52" font-family="'Helvetica Neue', Arial, sans-serif" font-size="16" font-weight="900" fill="#003893" text-anchor="middle">ISO</text>
  <text x="60" y="72" font-family="'Helvetica Neue', Arial, sans-serif" font-size="12" font-weight="700" fill="#003893" text-anchor="middle">9001:2015</text>
  <text x="60" y="88" font-family="'Helvetica Neue', Arial, sans-serif" font-size="7" font-weight="600" fill="#555555" text-anchor="middle">CERTIFIED</text>
</svg>
SVG;

file_put_contents("$base_dir/assets/img/certifications/usda-organic.svg", $usda_svg);
file_put_contents("$base_dir/assets/img/certifications/ecocert.svg", $ecocert_svg);
file_put_contents("$base_dir/assets/img/certifications/eu-organic.svg", $eu_organic_svg);
file_put_contents("$base_dir/assets/img/certifications/iso-9001.svg", $iso_svg);
echo "Certifications SVGs written.\n";

// 2. World Export Shipping Graphic SVG
$export_map_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 500" width="900" height="500">
  <rect width="900" height="500" fill="#f8faf6"/>
  <!-- Stylized Continents -->
  <g fill="#d8e2d2" stroke="#ffffff" stroke-width="1.5">
    <!-- North America -->
    <path d="M120 80 Q180 60 250 90 T320 160 T250 240 T150 200 Z"/>
    <!-- South America -->
    <path d="M220 260 Q270 270 290 330 T250 440 T190 360 Z"/>
    <!-- Europe -->
    <path d="M420 80 Q490 70 540 100 T530 160 T450 160 Z"/>
    <!-- Africa -->
    <path d="M430 180 Q510 180 540 250 T510 380 T440 340 T410 240 Z"/>
    <!-- Asia -->
    <path d="M540 90 Q650 70 780 110 T820 220 T680 260 T560 170 Z"/>
    <!-- Australia -->
    <path d="M700 320 Q770 310 800 360 T740 430 T670 370 Z"/>
    <!-- Madagascar island -->
    <path d="M565 305 Q575 300 580 325 T570 365 T558 335 Z" fill="#4a6b36"/>
  </g>
  <!-- Flight / Sea routes from Hub -->
  <g fill="none" stroke="#b88b4a" stroke-width="2.5" stroke-dasharray="6,4">
    <!-- Route to Europe (Paris/Frankfurt) -->
    <path d="M570 325 Q550 200 480 120"/>
    <!-- Route to North America (New York) -->
    <path d="M570 325 Q380 200 240 140"/>
    <!-- Route to Asia (Tokyo/Singapore) -->
    <path d="M570 325 Q680 260 740 160"/>
    <!-- Route to Middle East (Dubai) -->
    <path d="M570 325 Q570 240 550 190"/>
    <!-- Route to Australia -->
    <path d="M570 325 Q650 360 720 360"/>
  </g>
  <!-- Air and Sea nodes -->
  <circle cx="570" cy="325" r="8" fill="#4a6b36" stroke="#ffffff" stroke-width="2"/>
  <circle cx="480" cy="120" r="6" fill="#b88b4a" stroke="#ffffff" stroke-width="2"/>
  <circle cx="240" cy="140" r="6" fill="#b88b4a" stroke="#ffffff" stroke-width="2"/>
  <circle cx="740" cy="160" r="6" fill="#b88b4a" stroke="#ffffff" stroke-width="2"/>
  <circle cx="550" cy="190" r="6" fill="#b88b4a" stroke="#ffffff" stroke-width="2"/>
  <circle cx="720" cy="360" r="6" fill="#b88b4a" stroke="#ffffff" stroke-width="2"/>
  <!-- Airplane icon at Europe route -->
  <path d="M510 160 l8 -3 l2 -8 l3 8 l8 3 l-8 3 l-3 8 l-2 -8 Z" fill="#4a6b36"/>
  <!-- Destination Labels -->
  <text x="480" y="105" font-family="'Helvetica Neue', Arial, sans-serif" font-size="12" font-weight="700" fill="#2d3436" text-anchor="middle">EUROPE</text>
  <text x="240" y="125" font-family="'Helvetica Neue', Arial, sans-serif" font-size="12" font-weight="700" fill="#2d3436" text-anchor="middle">NORTH AMERICA</text>
  <text x="740" y="145" font-family="'Helvetica Neue', Arial, sans-serif" font-size="12" font-weight="700" fill="#2d3436" text-anchor="middle">ASIA PACIFIC</text>
  <text x="575" y="380" font-family="'Helvetica Neue', Arial, sans-serif" font-size="13" font-weight="800" fill="#4a6b36" text-anchor="middle">DHURIA PRODUCTION ORIGIN</text>
</svg>
SVG;
file_put_contents("$base_dir/assets/img/activities/activity-export.svg", $export_map_svg);
echo "Export map SVG written.\n";

// 3. High quality photographic assets download list
$downloads = [
    // Banners
    "$base_dir/assets/img/banners/banner-about.jpg" => "https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=1600&q=80",
    "$base_dir/assets/img/banners/banner-activities.jpg" => "https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?auto=format&fit=crop&w=1600&q=80",
    "$base_dir/assets/img/banners/banner-products.jpg" => "https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1600&q=80",
    "$base_dir/assets/img/banners/banner-news.jpg" => "https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=1600&q=80",
    "$base_dir/assets/img/banners/banner-contact.jpg" => "https://images.unsplash.com/photo-1509316975850-ff9c5deb0cd9?auto=format&fit=crop&w=1600&q=80",

    // Who We Are / About Section
    "$base_dir/assets/img/about/nursery.jpg" => "https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?auto=format&fit=crop&w=800&q=80",
    "$base_dir/assets/img/about/vision.jpg" => "https://images.unsplash.com/photo-1500651230702-0e2d8a49d4ad?auto=format&fit=crop&w=800&q=80",
    "$base_dir/assets/img/about/mission.jpg" => "https://images.unsplash.com/photo-1592417817098-8f3d6910985c?auto=format&fit=crop&w=800&q=80",

    // News
    "$base_dir/assets/img/news/romania-mission.jpg" => "https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=800&q=80",
    "$base_dir/assets/img/news/biofach-nuremberg.jpg" => "https://images.unsplash.com/photo-1530595467537-0b5996c41f2d?auto=format&fit=crop&w=800&q=80",
    "$base_dir/assets/img/news/csr-forum.jpg" => "https://images.unsplash.com/photo-1475721027785-f74eccf877e2?auto=format&fit=crop&w=800&q=80",
    "$base_dir/assets/img/news/sial-canada.jpg" => "https://images.unsplash.com/photo-1587854692152-cbe660dbde88?auto=format&fit=crop&w=800&q=80",
    "$base_dir/assets/img/news/gallery-1.jpg" => "https://images.unsplash.com/photo-1577962917302-cd874c4e31d2?auto=format&fit=crop&w=800&q=80",
    "$base_dir/assets/img/news/gallery-2.jpg" => "https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80",
    "$base_dir/assets/img/news/gallery-3.jpg" => "https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=800&q=80",

    // Products (Authentic botanical images on clean backgrounds)
    "$base_dir/assets/img/products/ylang-ylang.jpg" => "https://images.unsplash.com/photo-1597848212624-a19eb35e2651?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/ravintsara.jpg" => "https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/katrafay.jpg" => "https://images.unsplash.com/photo-1600857544200-b2f666a9a2ec?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/black-pepper.jpg" => "https://images.unsplash.com/photo-1509358271058-acd22cc93898?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/niaouli.jpg" => "https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/clove-bud.jpg" => "https://images.unsplash.com/photo-1596040033229-a9821ebd058d?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/ginger.jpg" => "https://images.unsplash.com/photo-1615485290382-441e4d049cb5?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/combava.jpg" => "https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/lemon-eucalyptus.jpg" => "https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/palmarosa.jpg" => "https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/patchouli.jpg" => "https://images.unsplash.com/photo-1545239351-ef35f43d514b?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/rose-geranium.jpg" => "https://images.unsplash.com/photo-1595475207225-428b62bda831?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/helichrysum.jpg" => "https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/vetiver.jpg" => "https://images.unsplash.com/photo-1508780709619-79562169bc64?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/tagetes.jpg" => "https://images.unsplash.com/photo-1508610048659-a06b669e3321?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/cinnamon.jpg" => "https://images.unsplash.com/photo-1509358271058-acd22cc93898?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/calophyllum.jpg" => "https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/baobab.jpg" => "https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/moringa.jpg" => "https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?auto=format&fit=crop&w=500&q=80",
    "$base_dir/assets/img/products/marula.jpg" => "https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=500&q=80"
];

$ctx = stream_context_create([
    'http' => [
        'timeout' => 15,
        'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
    ]
]);

foreach ($downloads as $path => $url) {
    if (file_exists($path) && filesize($path) > 1000) {
        echo "Exists: " . basename($path) . "\n";
        continue;
    }
    $dir = dirname($path);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    $content = @file_get_contents($url, false, $ctx);
    if ($content) {
        file_put_contents($path, $content);
        echo "Downloaded: " . basename($path) . " (" . strlen($content) . " bytes)\n";
    } else {
        echo "Failed: " . basename($path) . " from $url\n";
    }
}
echo "Asset fetch complete.\n";
