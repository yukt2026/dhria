<?php
// scripts/generate-modal-assets.php
$base_dir = dirname(__DIR__);

// 1. Madagascar map with harvest zone indicator
$mada_map_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 160" width="80" height="128" fill="none">
  <!-- Madagascar Silhouette in White -->
  <path d="M42 16 C50 14, 58 22, 56 32 C54 42, 50 52, 48 64 C46 76, 42 88, 38 100 C34 112, 30 126, 26 138 C23 144, 20 140, 20 134 C20 122, 24 108, 27 94 C30 80, 33 66, 36 50 C38 34, 34 22, 42 16 Z" fill="#ffffff" stroke="#e0e0e0" stroke-width="0.8"/>
  <!-- Highlighted Harvest Region Oval -->
  <ellipse cx="44" cy="68" rx="8" ry="16" fill="none" stroke="#4a6b36" stroke-width="2.2"/>
</svg>
SVG;

// 2. Realistic QR Code SVG
$qr_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="46" height="46" fill="#1b2421">
  <rect width="100" height="100" fill="#ffffff"/>
  <!-- Top-left finder -->
  <rect x="8" y="8" width="28" height="28" fill="#1b2421"/>
  <rect x="12" y="12" width="20" height="20" fill="#ffffff"/>
  <rect x="16" y="16" width="12" height="12" fill="#1b2421"/>
  <!-- Top-right finder -->
  <rect x="64" y="8" width="28" height="28" fill="#1b2421"/>
  <rect x="68" y="12" width="20" height="20" fill="#ffffff"/>
  <rect x="72" y="16" width="12" height="12" fill="#1b2421"/>
  <!-- Bottom-left finder -->
  <rect x="8" y="64" width="28" height="28" fill="#1b2421"/>
  <rect x="12" y="68" width="20" height="20" fill="#ffffff"/>
  <rect x="16" y="72" width="12" height="12" fill="#1b2421"/>
  <!-- Timing and data patterns -->
  <rect x="40" y="12" width="4" height="4"/>
  <rect x="48" y="12" width="4" height="4"/>
  <rect x="56" y="12" width="4" height="4"/>
  <rect x="12" y="40" width="4" height="4"/>
  <rect x="12" y="48" width="4" height="4"/>
  <rect x="12" y="56" width="4" height="4"/>
  <rect x="42" y="42" width="16" height="16"/>
  <rect x="46" y="46" width="8" height="8" fill="#ffffff"/>
  <rect x="64" y="40" width="6" height="6"/>
  <rect x="76" y="40" width="6" height="6"/>
  <rect x="86" y="44" width="6" height="6"/>
  <rect x="40" y="64" width="8" height="6"/>
  <rect x="52" y="68" width="6" height="8"/>
  <rect x="64" y="64" width="10" height="6"/>
  <rect x="78" y="70" width="14" height="6"/>
  <rect x="40" y="80" width="6" height="10"/>
  <rect x="54" y="82" width="8" height="8"/>
  <rect x="68" y="82" width="8" height="10"/>
  <rect x="82" y="82" width="8" height="8"/>
</svg>
SVG;

// 3. Amber bottle with dropper illustration SVG
$amber_bottle_svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 140" width="45" height="105">
  <!-- Dropper Cap (Black ribbed) -->
  <path d="M22 6 C22 2, 38 2, 38 6 L38 18 L22 18 Z" fill="#2d2d2d"/>
  <rect x="18" y="18" width="24" height="24" rx="2" fill="#1a1a1a"/>
  <!-- Cap Ribs -->
  <line x1="22" y1="20" x2="22" y2="40" stroke="#333" stroke-width="1.5"/>
  <line x1="26" y1="20" x2="26" y2="40" stroke="#333" stroke-width="1.5"/>
  <line x1="30" y1="20" x2="30" y2="40" stroke="#333" stroke-width="1.5"/>
  <line x1="34" y1="20" x2="34" y2="40" stroke="#333" stroke-width="1.5"/>
  <line x1="38" y1="20" x2="38" y2="40" stroke="#333" stroke-width="1.5"/>
  <!-- Bottle Neck -->
  <rect x="23" y="42" width="14" height="8" fill="#a45214"/>
  <!-- Bottle Body (Amber Glass) -->
  <rect x="10" y="50" width="40" height="85" rx="6" fill="#b85d19"/>
  <!-- Glass Shading & Highlight -->
  <rect x="10" y="50" width="40" height="85" rx="6" fill="url(#amberGrad)"/>
  <path d="M12 56 L12 130" stroke="#ffc078" stroke-width="2" stroke-linecap="round" opacity="0.6"/>
  <!-- Bottle Label -->
  <rect x="14" y="65" width="32" height="55" rx="2" fill="#fdfcf8" stroke="#d5be8a" stroke-width="0.8"/>
  <text x="30" y="78" font-family="'Helvetica Neue', Arial, sans-serif" font-size="5.5" font-weight="900" fill="#003893" text-anchor="middle">DHURIA</text>
  <line x1="18" y1="82" x2="42" y2="82" stroke="#b88b4a" stroke-width="0.6"/>
  <text x="30" y="89" font-family="'Helvetica Neue', Arial, sans-serif" font-size="4" font-weight="700" fill="#333333" text-anchor="middle">PURE &amp; BIO</text>
  <text x="30" y="96" font-family="'Helvetica Neue', Arial, sans-serif" font-size="3.5" font-style="italic" fill="#555555" text-anchor="middle">Essential Oil</text>
  <text x="30" y="105" font-family="'Helvetica Neue', Arial, sans-serif" font-size="4" font-weight="800" fill="#4a6b36" text-anchor="middle">100% PURE</text>
  <text x="30" y="114" font-family="'Helvetica Neue', Arial, sans-serif" font-size="3" fill="#888888" text-anchor="middle">Madagascar</text>

  <defs>
    <linearGradient id="amberGrad" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#7a3407" stop-opacity="0.8"/>
      <stop offset="35%" stop-color="#cf691d" stop-opacity="0.2"/>
      <stop offset="70%" stop-color="#ea7c25" stop-opacity="0.4"/>
      <stop offset="100%" stop-color="#592504" stop-opacity="0.9"/>
    </linearGradient>
  </defs>
</svg>
SVG;

file_put_contents("$base_dir/assets/img/mada-map.svg", $mada_map_svg);
file_put_contents("$base_dir/assets/img/qr-code.svg", $qr_svg);
file_put_contents("$base_dir/assets/img/amber-bottle.svg", $amber_bottle_svg);
echo "Modal assets created.\n";
