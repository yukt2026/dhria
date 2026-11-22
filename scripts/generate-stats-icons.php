<?php
// scripts/generate-stats-icons.php
$base_dir = dirname(__DIR__);

$icons = [
    // Madagascar island line art
    'madagascar-sites.svg' => <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="60" height="60" fill="none" stroke="#b88b4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M42 12 C48 10, 54 18, 52 26 C50 34, 46 42, 44 50 C42 58, 38 66, 34 68 C30 70, 26 64, 28 56 C30 48, 34 38, 36 28 C38 18, 36 14, 42 12 Z"/>
  <circle cx="44" cy="24" r="2.5" fill="#4a6b36" stroke="none"/>
  <circle cx="36" cy="46" r="2.5" fill="#4a6b36" stroke="none"/>
  <circle cx="32" cy="60" r="2.5" fill="#4a6b36" stroke="none"/>
</svg>
SVG,

    // Essential oil drop with leaves
    'oil-pure.svg' => <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="60" height="60" fill="none" stroke="#b88b4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M40 14 C40 14, 22 36, 22 48 A18 18 0 0 0 58 48 C58 36, 40 14, 40 14 Z"/>
  <path d="M36 40 C32 44, 32 50, 36 54"/>
  <path d="M50 28 C56 26, 62 30, 64 36 C60 40, 54 38, 50 28 Z" fill="#eef3ea" stroke="#4a6b36"/>
</svg>
SVG,

    // Growth chart with arrow
    'sales-export.svg' => <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="60" height="60" fill="none" stroke="#b88b4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <line x1="16" y1="64" x2="64" y2="64"/>
  <line x1="24" y1="64" x2="24" y2="48"/>
  <line x1="36" y1="64" x2="36" y2="38"/>
  <line x1="48" y1="64" x2="48" y2="28"/>
  <line x1="60" y1="64" x2="60" y2="18"/>
  <polyline points="20 46, 34 36, 46 26, 62 14"/>
  <polyline points="54 14, 62 14, 62 22"/>
</svg>
SVG,

    // Human resources team
    'human-resources.svg' => <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="60" height="60" fill="none" stroke="#b88b4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <circle cx="40" cy="24" r="8"/>
  <path d="M26 50 C26 42, 32 38, 40 38 C48 38, 54 42, 54 50"/>
  <circle cx="20" cy="30" r="6"/>
  <path d="M10 52 C10 46, 14 42, 20 42 C23 42, 26 43, 28 45"/>
  <circle cx="60" cy="30" r="6"/>
  <path d="M52 45 C54 43, 57 42, 60 42 C66 42, 70 46, 70 52"/>
</svg>
SVG,

    // Farming plant sprout in hands/soil
    'farming-plantation.svg' => <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="60" height="60" fill="none" stroke="#b88b4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M40 64 L40 32"/>
  <path d="M40 32 C30 20, 16 26, 18 38 C28 40, 36 36, 40 32 Z" fill="#eef3ea" stroke="#4a6b36"/>
  <path d="M40 40 C50 28, 64 34, 62 46 C52 48, 44 44, 40 40 Z" fill="#eef3ea" stroke="#4a6b36"/>
  <path d="M16 64 C26 58, 54 58, 64 64" stroke-width="2.5"/>
</svg>
SVG,

    // 4 Segments served (flasks / flower / essence)
    'segments-served.svg' => <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" width="60" height="60" fill="none" stroke="#b88b4a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
  <path d="M34 16 L46 16 M40 16 L40 28 L56 56 C58 60, 55 64, 50 64 L30 64 C25 64, 22 60, 24 56 L40 28 Z"/>
  <path d="M28 52 L52 52"/>
  <circle cx="36" cy="58" r="1.5" fill="#b88b4a"/>
  <circle cx="44" cy="56" r="2" fill="#b88b4a"/>
</svg>
SVG
];

$target_dir = "$base_dir/assets/img/stats";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

foreach ($icons as $filename => $svg) {
    file_put_contents("$target_dir/$filename", $svg);
    echo "Saved: $filename\n";
}
