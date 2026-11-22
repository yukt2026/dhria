<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$current_page = basename($_SERVER['PHP_SELF']);

$brand = [
    'name'        => 'DHURIA',
    'subname'     => 'NATURAL & PURE BOTANICAL EXTRACTS',
    'tagline'     => 'Specific Essential Oils & Pure Natural Ingredients',
    'native_quote'=> 'Ny zavamanirin\'i Madagasikara',
    'description' => 'Flora-of-Madagascar (DHURIA), a company which produces and exports essential oils and pure vegetable oils from Madagascar.',
    'phone'       => '+91 9318445297',
    'alt_phone'   => '+261 34 04 179 10',
    'phone_clean' => '9318445297',
    'email'       => 'contact@floramad.com',
    'address'     => 'LOT V V 118 J BIS Manakambahiny, 101 Antananarivo - Madagascar',
    'hours'       => 'Mon – Fri: 8:00 AM – 5:30 PM (EAT / UTC+3)',
    'whatsapp'    => 'https://wa.me/919318445297',
    'facebook'    => 'https://www.facebook.com/profile.php?id=61594745097448',
    'instagram'   => 'https://www.instagram.com/ayurvedadhuria/',
    'linkedin'    => 'https://www.linkedin.com',
    'year'        => date('Y')
];

$stats = [
    [
        'title' => 'OUR SITES',
        'icon'  => 'assets/img/stats/madagascar-sites.svg',
        'items' => [
            '45-hectares of farming and distillation',
            '40 smallholder partner farmers'
        ]
    ],
    [
        'title' => 'OUR ESSENTIAL OILS : Fully pure and natural',
        'icon'  => 'assets/img/stats/oil-pure.svg',
        'items' => [
            '20% sell organic certified'
        ]
    ],
    [
        'title' => 'OUR SALES',
        'icon'  => 'assets/img/stats/sales-export.svg',
        'items' => [
            '100% to the international market'
        ]
    ],
    [
        'title' => 'HUMAN RESOURCES',
        'icon'  => 'assets/img/stats/human-resources.svg',
        'items' => [
            '100 direct jobs',
            'around 500 seasonal jobs'
        ]
    ],
    [
        'title' => 'OUR FARMINGS',
        'icon'  => 'assets/img/stats/farming-plantation.svg',
        'items' => [
            '180 ha of plantation'
        ]
    ],
    [
        'title' => '4 SEGMENTS SERVED',
        'icon'  => 'assets/img/stats/segments-served.svg',
        'items' => [
            'Aromatherapy',
            'Cosmetics',
            'Flavor',
            'Fragrance'
        ]
    ]
];

$csr_commitments = [
    [
        'number' => 1,
        'title'  => 'Environmental Impact',
        'desc'   => 'To minimize and/or limit our environmental impacts.'
    ],
    [
        'number' => 2,
        'title'  => 'Working Conditions',
        'desc'   => 'To maintain decent salary, competitive and safe working conditions for our staff.'
    ],
    [
        'number' => 3,
        'title'  => 'Economic & Human Development',
        'desc'   => 'To maximize the positive impacts of our activities on economic and human development.'
    ],
    [
        'number' => 4,
        'title'  => 'Customer Expectations',
        'desc'   => 'To provide responsible products that meet the customers expectations.'
    ]
];

$activities = [
    [
        'id'          => 'planting',
        'title'       => 'PLANTING',
        'subtitle'    => 'Sustainable Botanical Cultivation',
        'image'       => 'assets/img/activities/activity-planting.jpg',
        'lead'        => 'Aromatic and Medicinal Plants (AMP) development is at the heart of our activities.',
        'description' => 'Owning some cultivation and picking sites, as well as working closely with farmers and local producers, Flora-of-Madagascar ensures the planting of aromatic raw materials that we will use for essential oils extraction.',
        'highlights'  => ['180 ha of plantation sites', 'Selection of native, high-potency aromatic seeds', 'Close partnership with local smallholder farmers', 'Zero chemical fertilizers or synthetic pesticides'],
        'order'       => 'image-left'
    ],
    [
        'id'          => 'processing',
        'title'       => 'PROCESSING',
        'subtitle'    => 'Steam Water Distillation',
        'image'       => 'assets/img/activities/activity-processing.jpg',
        'lead'        => 'Raw materials (flowers, leaves, rhizomes, barks, etc.), from planting sites or collected from small producers, undergo a water steam distillation operation in order to extract the essences they contain.',
        'description' => 'The essential oils collected are fully pure, without technological additives or preservatives.',
        'highlights'  => ['Low-pressure water steam distillation', 'Food-grade stainless steel alembics & copper coils', 'Careful temperature regulation to preserve delicate terpenes', 'Strict quality and purity testing on every batch'],
        'order'       => 'image-right'
    ],
    [
        'id'          => 'conditioning',
        'title'       => 'CONDITIONNING',
        'subtitle'    => 'European Standard Packaging',
        'image'       => 'assets/img/activities/activity-conditioning.jpg',
        'lead'        => 'To guarantee a proper conservation of their properties, our essential oils are packaged in HDPE EU drums (20kg).',
        'description' => 'They are stored in a well-ventilated and dark place, away from direct sunlight and heat sources.',
        'highlights'  => ['UN-certified food-grade HDPE EU drums (20kg / 200kg)', 'Nitrogen inerting to prevent oxidation', 'Dedicated temperature-controlled dark storage warehouse', 'Full batch labeling with international traceability codes'],
        'order'       => 'image-left'
    ],
    [
        'id'          => 'export',
        'title'       => 'EXPORT',
        'subtitle'    => 'International Logistics by Air & Sea',
        'image'       => 'assets/img/activities/activity-export.svg',
        'lead'        => 'Depending on the customers requests and their order quantities, our essential oils are shipped by air or by sea.',
        'description' => 'Containers and packaging are labelled according to current international legislation.',
        'highlights'  => ['Express worldwide air freight & maritime container lines', 'Compliance with IATA / IMDG dangerous goods regulations', 'Complete documentation: CoA, GC-MS reports, MSDS, Organic certificates', 'Direct support for international customs clearance'],
        'order'       => 'image-right'
    ]
];

// All 25 authentic products matching Floramad Image 1, 2, 3 with complete specifications
$products = [
    // 1. Ahibero
    [
        'id'             => 'ahibero',
        'title'          => 'Ahibero',
        'modal_title'    => 'AHIBERO ESSENTIAL OIL',
        'botanical_name' => 'Cymbopogon giganteus',
        'inci_name'      => 'CYMBOPOGON GIGANTEUS OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Citronella-like, spicy, fresh and woody notes',
        'used_part'      => 'Aerial parts / Leaves',
        'collection'     => 'Culture & Wild harvest',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Aromatherapy, Perfumery, Wellness',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'], // active: M, J, J, A, S
        'active_months'  => ['MAY', 'JUN', 'JUL', 'AUG', 'SEP'],
        'uses_functions' => [
            'Antibacterial, antifungal, and antiseptic',
            'Sedative, relaxing and calming',
            'Insect repellent and purifying atmosphere',
            'Natural fragrance top/heart note'
        ],
        'image'          => 'assets/img/products/ahibero.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 2. Black Pepper
    [
        'id'             => 'black-pepper',
        'title'          => 'Black pepper',
        'modal_title'    => 'BLACK PEPPER ESSENTIAL OIL',
        'botanical_name' => 'Piper nigrum',
        'inci_name'      => 'PIPER NIGRUM FRUIT OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Warm, spicy, dry and woody aroma',
        'used_part'      => 'Dried berries',
        'collection'     => 'Culture',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Cosmetic, Fragrance, Aromatherapy, Food flavor',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['JUL', 'AUG', 'SEP', 'OCT', 'NOV'],
        'uses_functions' => [
            'Stimulating and tonifying circulatory agent',
            'Warming massage ingredient for joint and muscle comfort',
            'Digestive tonic and digestive comfort',
            'Rich fixative in masculine and amber perfumery'
        ],
        'image'          => 'assets/img/products/black-pepper.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 3. Bourbon Geranium of Madagascar (Featured in Reference Image 1)
    [
        'id'             => 'bourbon-geranium',
        'title'          => 'Bourbon geranium of Madagascar',
        'modal_title'    => 'GERANIUM ESSENTIAL OIL',
        'botanical_name' => 'Pelargonium Graveolens',
        'inci_name'      => 'PELARGONIUM GRAVEOLENS OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Floral, soft, and slightly fruity',
        'used_part'      => 'Leaves',
        'collection'     => 'Culture',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Fragrance, Cosmetic, Aromatherapy',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT'],
        'uses_functions' => [
            'Antiseptic, antifungal, and anti-inflammatory',
            'Astringent, hemostatic, and regenerative',
            'Relaxing and anti-stress',
            'Skin and hair tonic',
            'Perfume ingredient',
            'Insect repellent'
        ],
        'image'          => 'assets/img/products/rose-geranium.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 4. Bractei
    [
        'id'             => 'bractei',
        'title'          => 'Bractei',
        'modal_title'    => 'BRACTEI ESSENTIAL OIL',
        'botanical_name' => 'Helichrysum bracteiferum',
        'inci_name'      => 'HELICHRYSUM BRACTEIFERUM FLOWER/LEAF OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Honeyed, herbaceous, and resinous aroma',
        'used_part'      => 'Flowering tops & aerials',
        'collection'     => 'Wild harvest & Culture',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Aromatherapy, Cosmetic skincare',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['MAY', 'JUN', 'JUL', 'AUG'],
        'uses_functions' => [
            'Immune and respiratory tract soothing',
            'Skin purificant for blemish-prone complexions',
            'Invigorating atmospheric diffuse agent',
            'Traditional Malagasy protective remedy'
        ],
        'image'          => 'assets/img/products/bractei.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 5. Cinnamon Bark / Leaf
    [
        'id'             => 'cinnamon-bark-leaf',
        'title'          => 'Cinnamon Bark / Leaf',
        'modal_title'    => 'CINNAMON BARK / LEAF ESSENTIAL OIL',
        'botanical_name' => 'Cinnamomum Zeylanicum',
        'inci_name'      => 'CINNAMOMUM ZEYLANICUM BARK/LEAF OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Warm, radiant, sweet and powerful spicy bouquet',
        'used_part'      => 'Inner bark / Mature leaves',
        'collection'     => 'Culture',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Fragrance, Food aroma, Aromatherapy',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['JUN', 'JUL', 'AUG', 'SEP', 'OCT'],
        'uses_functions' => [
            'Exceptionally broad antibacterial & antiviral activity',
            'Vitalizing general tonic and circulatory booster',
            'Classic oriental perfumery spicy heart note',
            'Purifying natural antiseptic agent'
        ],
        'image'          => 'assets/img/products/cinnamon.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 6. Clove Bud / Clove Leaf
    [
        'id'             => 'clove-bud-stem-leaf',
        'title'          => 'Clove Bud / Clove Leaf',
        'modal_title'    => 'CLOVE BUD & LEAF ESSENTIAL OIL',
        'botanical_name' => 'Eugenia caryophyllus',
        'inci_name'      => 'EUGENIA CARYOPHYLLUS BUD OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Intense, warm, spicy and eugenol-rich',
        'used_part'      => 'Dried buds & floral stems',
        'collection'     => 'Culture',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Oral care, Fragrance, Aromatherapy, Food flavor',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['OCT', 'NOV', 'DEC', 'JAN', 'FEB'],
        'uses_functions' => [
            'Renowned analgesic and dental oral-care ally',
            'Superior antioxidant and cellular protector',
            'Potent antiseptic and cleansing properties',
            'Key component in warming winter cosmetics'
        ],
        'image'          => 'assets/img/products/clove-bud.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 7. Fresh Ginger
    [
        'id'             => 'fresh-ginger',
        'title'          => 'Fresh Ginger',
        'modal_title'    => 'FRESH GINGER ESSENTIAL OIL',
        'botanical_name' => 'Zingiber Officinale',
        'inci_name'      => 'ZINGIBER OFFICINALE ROOT OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Zesty, fresh, spicy with citrus top undertones',
        'used_part'      => 'Freshly dug rhizomes',
        'collection'     => 'Culture',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Cosmetic, Flavors, Aromatherapy, Perfumery',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['JUL', 'AUG', 'SEP', 'OCT'],
        'uses_functions' => [
            'Digestive stimulant and anti-nausea remedy',
            'Circulatory and energizing muscle massage additive',
            'Scalp-stimulating active ingredient in shampoos',
            'Dynamic sparkling top note in niche perfumery'
        ],
        'image'          => 'assets/img/products/ginger.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 8. Gymno
    [
        'id'             => 'gymno',
        'title'          => 'Gymno',
        'modal_title'    => 'GYMNO ESSENTIAL OIL',
        'botanical_name' => 'Helichrysum gymnocephalum',
        'inci_name'      => 'HELICHRYSUM GYMNOCEPHALUM LEAF OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Camphorous, cineolic, herbaceous and uplifting',
        'used_part'      => 'Leaves & flowering tops',
        'collection'     => 'Culture & Wild harvest',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Aromatherapy, Respiratory wellness',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['MAY', 'JUN', 'JUL', 'AUG'],
        'uses_functions' => [
            'Respiratory clearing and decongestant',
            'Immune-supportive and antiviral diffusion',
            'Invigorating muscle comfort after exertion',
            'Purifying room and workplace air diffuser'
        ],
        'image'          => 'assets/img/products/gymno.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 9. Katrafay
    [
        'id'             => 'katrafay',
        'title'          => 'Katrafay',
        'modal_title'    => 'KATRAFAY ESSENTIAL OIL',
        'botanical_name' => 'Cedrelopsis grevei',
        'inci_name'      => 'CEDRELOPSIS GREVEI BARK OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Woody, earthy, herbaceous with amber nuances',
        'used_part'      => 'Bark',
        'collection'     => 'Sustainable wild harvesting',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Cosmetics, Restorative Aromatherapy, Massage',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT'],
        'uses_functions' => [
            'Anti-inflammatory for muscular and joint tension',
            'Skin-barrier reinforcing & moisturizing stimulant',
            'Endemic Malagasy restorative tonic',
            'Fixative base note for natural woody fragrances'
        ],
        'image'          => 'assets/img/products/katrafay.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 10. Lemon Eucalyptus
    [
        'id'             => 'lemon-eucalyptus',
        'title'          => 'Lemon Eucalyptus',
        'modal_title'    => 'LEMON EUCALYPTUS ESSENTIAL OIL',
        'botanical_name' => 'Eucalyptus citriodora',
        'inci_name'      => 'EUCALYPTUS CITRIODORA OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Lemon-fresh, sweet, radiant and herbaceous',
        'used_part'      => 'Leaves',
        'collection'     => 'Culture',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Aromatherapy, Outdoor skincare, Fragrance',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP'],
        'uses_functions' => [
            'Natural mosquito and biting insect deterrent',
            'Potent anti-inflammatory for tendinitis and rheumatism',
            'Soothing and calming for nervous agitation',
            'Refreshing sanitizing air mist'
        ],
        'image'          => 'assets/img/products/lemon-eucalyptus.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 11. Niaouli
    [
        'id'             => 'niaouli',
        'title'          => 'Niaouli',
        'modal_title'    => 'NIAOULI ESSENTIAL OIL',
        'botanical_name' => 'Melaleuca quinquenervia',
        'inci_name'      => 'MELALEUCA QUINQUENERVIA OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Camphoric, fresh, resinous and slightly sweet',
        'used_part'      => 'Leaves & twigs',
        'collection'     => 'Culture & Wild harvest',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Cosmetic, Aromatherapy, Healthcare',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP'],
        'uses_functions' => [
            'Broad spectrum antiviral & antibacterial defender',
            'Venous and lymphatic circulatory decongestant',
            'Skin radioprotective and purifying agent',
            'Clear breathing and broncho-pulmonary support'
        ],
        'image'          => 'assets/img/products/niaouli.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 12. Palmarosa
    [
        'id'             => 'palmarosa',
        'title'          => 'Palmarosa',
        'modal_title'    => 'PALMAROSA ESSENTIAL OIL',
        'botanical_name' => 'Cymbopogon martinii',
        'inci_name'      => 'CYMBOPOGON MARTINII OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Sweet, rosy, fresh floral aroma high in geraniol',
        'used_part'      => 'Fresh and dried aerial herb',
        'collection'     => 'Culture',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Luxury cosmetics, Aromatherapy, Fine soapmaking',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['MAY', 'JUN', 'JUL', 'AUG', 'SEP'],
        'uses_functions' => [
            'Universal skin balancing agent (dry, oily, mature)',
            'Natural deodorant regulating skin perspiration',
            'Antimicrobial and cellular revitalizing active',
            'Harmonious floral top/heart note in perfumery'
        ],
        'image'          => 'assets/img/products/palmarosa.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 13. Patchouli
    [
        'id'             => 'patchouli',
        'title'          => 'Patchouli',
        'modal_title'    => 'PATCHOULI ESSENTIAL OIL',
        'botanical_name' => 'Pogostemon cablin',
        'inci_name'      => 'POGOSTEMON CABLIN LEAF OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Earthy, mossy, dark woody, and sensual',
        'used_part'      => 'Dried & fermented leaves',
        'collection'     => 'Culture',
        'process'        => 'Slow steam distillation',
        'utilisation'    => 'Haute perfumery, Anti-aging skincare, Aromatherapy',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['JUN', 'JUL', 'AUG', 'SEP', 'OCT'],
        'uses_functions' => [
            'Legendary foundation and fixative for luxury perfumes',
            'Venous tonic for heavy legs and circulation',
            'Tissue regenerating and cicatrizing for dry skin',
            'Grounding and aphrodisiac emotional balancer'
        ],
        'image'          => 'assets/img/products/patchouli.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 14. Ravensara aromatica
    [
        'id'             => 'ravensara-aromatica',
        'title'          => 'Ravensara aromatica',
        'modal_title'    => 'RAVENSARA AROMATICA ESSENTIAL OIL',
        'botanical_name' => 'Ravensara aromatica',
        'inci_name'      => 'RAVENSARA AROMATICA LEAF OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Anise-peppery, fresh, spicy and herbaceous',
        'used_part'      => 'Leaves',
        'collection'     => 'Culture & Wild harvest',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Aromatherapy, Massage, Fine perfumery',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['APR', 'MAY', 'JUN', 'JUL', 'AUG'],
        'uses_functions' => [
            'Immune tonic and nervous equilibrium',
            'Relaxing sleep aid and stress alleviation',
            'Muscle soothing balm component',
            'Traditional Malagasy wellness essence'
        ],
        'image'          => 'assets/img/products/ravensara-aromatica.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 15. Ravintsara (Signature Madagascar Oil)
    [
        'id'             => 'ravintsara',
        'title'          => 'Ravintsara',
        'modal_title'    => 'RAVINTSARA ESSENTIAL OIL',
        'botanical_name' => 'Cinnamomum camphora',
        'inci_name'      => 'CINNAMOMUM CAMPHORA LEAF OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Fresh, camphorous, cineolic and clearing',
        'used_part'      => 'Leaves',
        'collection'     => 'Culture',
        'process'        => 'Water steam distillation',
        'utilisation'    => 'Aromatherapy, Healthcare, Natural wellness',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT'],
        'uses_functions' => [
            'Unmatched antiviral and immune-defending prowess',
            'Respiratory decongestant (coughs, colds, bronchitis)',
            'Neurotonic fighting mental and physical exhaustion',
            'Gentle on skin and exceptionally well tolerated'
        ],
        'image'          => 'assets/img/products/ravintsara.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 16. Rosemary
    [
        'id'             => 'rosemary',
        'title'          => 'Rosemary',
        'modal_title'    => 'ROSEMARY ESSENTIAL OIL',
        'botanical_name' => 'Rosmarinus officinalis',
        'inci_name'      => 'ROSMARINUS OFFICINALIS LEAF OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Clean, fresh, herbaceous, and invigorating',
        'used_part'      => 'Flowering leafy twigs',
        'collection'     => 'Culture',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Haircare, Cosmetics, Aromatherapy',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP'],
        'uses_functions' => [
            'Scalp stimulant preventing hair loss and dandruff',
            'Mental focus and concentration enhancer',
            'Antioxidant and skin revitalizing extract',
            'Liver and general metabolic drainage support'
        ],
        'image'          => 'assets/img/products/rosemary.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 17. Saro (Mandravasarotra)
    [
        'id'             => 'saro',
        'title'          => 'Saro (Mandravasarotra)',
        'modal_title'    => 'SARO (MANDRAVASAROTRA) ESSENTIAL OIL',
        'botanical_name' => 'Cinnamosma fragrans',
        'inci_name'      => 'CINNAMOSMA FRAGRANS LEAF OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Warm, herbaceous, fresh cineolic with spicy undertones',
        'used_part'      => 'Leaves',
        'collection'     => 'Wild harvest',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Aromatherapy, Natural medicine, Cosmetics',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['JUN', 'JUL', 'AUG', 'SEP', 'OCT'],
        'uses_functions' => [
            'Supreme Madagascar anti-infectious and antiviral agent',
            '"Mandravasarotra" meaning "that keeps bad things away"',
            'Exceptional respiratory and skin purifying properties',
            'Skin restructuring and collagen-protecting properties'
        ],
        'image'          => 'assets/img/products/saro.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 18. Turmeric
    [
        'id'             => 'turmeric',
        'title'          => 'Turmeric',
        'modal_title'    => 'TURMERIC ESSENTIAL OIL',
        'botanical_name' => 'Curcuma longa',
        'inci_name'      => 'CURCUMA LONGA ROOT OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Warm, earthy, fresh rooty and woody',
        'used_part'      => 'Rhizomes',
        'collection'     => 'Culture',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Cosmetics, Wellness, Flavors',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['JUL', 'AUG', 'SEP', 'OCT'],
        'uses_functions' => [
            'Superlative antioxidant preventing skin aging',
            'Soothing joint comfort and anti-inflammatory properties',
            'Radiance-boosting agent in high-end cosmetic serums',
            'Digestive tonic and culinary gourmet flavor'
        ],
        'image'          => 'assets/img/products/turmeric.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 19. Vetiver
    [
        'id'             => 'vetiver',
        'title'          => 'Vetiver',
        'modal_title'    => 'VETIVER ESSENTIAL OIL',
        'botanical_name' => 'Vetiveria zizanioides',
        'inci_name'      => 'VETIVERIA ZIZANIOIDES ROOT OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Deep, smoky, earthy, woody and balsamic',
        'used_part'      => 'Washed roots',
        'collection'     => 'Culture',
        'process'        => 'Slow deep steam distillation',
        'utilisation'    => 'Haute perfumery, Aromatherapy, Soapmaking',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['MAY', 'JUN', 'JUL', 'AUG', 'SEP'],
        'uses_functions' => [
            'Legendary "oil of tranquility" calming nervous strain',
            'Irreplaceable natural fixative in international fine perfumery',
            'Circulatory and lymphatic tonic for heavy legs',
            'Grounding and meditative aromatherapeutic properties'
        ],
        'image'          => 'assets/img/products/vetiver.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 20. Wild Marigold (Tagete)
    [
        'id'             => 'wild-marigold',
        'title'          => 'Wild marigold (Tagete)',
        'modal_title'    => 'WILD MARIGOLD (TAGETES) ESSENTIAL OIL',
        'botanical_name' => 'Tagetes minuta',
        'inci_name'      => 'TAGETES MINUTA FLOWER OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Fruity, bittersweet green, and radiant floral',
        'used_part'      => 'Flowering aerials',
        'collection'     => 'Culture & Wild harvest',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Niche perfumery, Agri-ecological protection',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['FEB', 'MAR', 'APR', 'MAY'],
        'uses_functions' => [
            'Intriguing green-apple floral note in modern perfumery',
            'Potent natural antimicrobial and antifungal',
            'Biological repellent in organic horticulture',
            'Callus and skin-smoothing traditional ointment active'
        ],
        'image'          => 'assets/img/products/tagetes.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 21. Ylang Ylang Extra I / II / III / Complete (Signature Floral Crown)
    [
        'id'             => 'ylang-ylang',
        'title'          => 'Ylang Ylang extra, I, II, III, Complete',
        'modal_title'    => 'YLANG YLANG ESSENTIAL OIL',
        'botanical_name' => 'Cananga odorata',
        'inci_name'      => 'CANANGA ODORATA FLOWER OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Intensely sweet, floral, exotic, heady and balsamic',
        'used_part'      => 'Freshly hand-picked yellow flowers',
        'collection'     => 'Culture (Nosy Be & Ambanja plantations)',
        'process'        => 'Fractional water steam distillation',
        'utilisation'    => 'Luxury perfumery, Cosmetics, Aromatherapy',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['ALL YEAR', 'PEAK: APR-NOV'],
        'uses_functions' => [
            'Global icon of haute French and international perfumery',
            'Profoundly calming, anti-stress and hypotensive properties',
            'Sebum-regulating tonic for radiant skin and hair vitality',
            'Renowned sensual and euphoric aroma'
        ],
        'image'          => 'assets/img/products/ylang-ylang.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 22. Zazahely
    [
        'id'             => 'zazahely',
        'title'          => 'Zazahely',
        'modal_title'    => 'ZAZAHELY ESSENTIAL OIL',
        'botanical_name' => 'Croton geayi',
        'inci_name'      => 'CROTON GEAYI LEAF/TWIG OIL',
        'category'       => 'Essential Oils',
        'aromatic_desc'  => 'Spicy, peppery, woody with green top notes',
        'used_part'      => 'Leaves & young twigs',
        'collection'     => 'Wild collection from southern Madagascar',
        'process'        => 'Steam distillation',
        'utilisation'    => 'Aromatherapy, Skincare, Muscle relief',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['JUN', 'JUL', 'AUG', 'SEP'],
        'uses_functions' => [
            'Traditional comfort for joints, spine and muscular aches',
            'Warming circulatory stimulation',
            'Rare endemic botanical profile found only in Madagascar',
            'Purifying and revitalizing massage active'
        ],
        'image'          => 'assets/img/products/zazahely.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 23. Calophyllum (Tamanu Oil - Featured in Reference Image 2)
    [
        'id'             => 'calophyllum',
        'title'          => 'Calophyllum',
        'modal_title'    => 'CALOPHYLLUM VEGETABLE OIL',
        'botanical_name' => 'Calophyllum inophyllum',
        'inci_name'      => 'CALOPHYLLUM INOPHYLLUM SEED OIL',
        'category'       => 'Vegetable Oils',
        'aromatic_desc'  => 'Light, Sweet, Hazelnut',
        'used_part'      => 'Seeds',
        'collection'     => 'Culture',
        'process'        => 'Cold-pressing',
        'utilisation'    => 'Aromatherapy, Cosmetic',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
        'uses_functions' => [
            'Antibacterial, anti-inflammatory, analgesic, antioxidant',
            'Circulatory tonic',
            'Antiseptic and analgesic',
            'Skin tonic, moisturizing and soothing'
        ],
        'image'          => 'assets/img/products/calophyllum.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 24. Baobab Seed Oil
    [
        'id'             => 'baobab',
        'title'          => 'Baobab Seed Oil',
        'modal_title'    => 'BAOBAB VEGETABLE OIL',
        'botanical_name' => 'Adansonia digitata',
        'inci_name'      => 'ADANSONIA DIGITATA SEED OIL',
        'category'       => 'Vegetable Oils',
        'aromatic_desc'  => 'Soft, faint nutty, golden virgin oil',
        'used_part'      => 'Seeds from wild baobab fruit',
        'collection'     => 'Wild harvest & Sustainable community collection',
        'process'        => 'First mechanical cold-pressing',
        'utilisation'    => 'Cosmetic, Dermatological skincare, Haircare',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['MAY', 'JUN', 'JUL', 'AUG', 'SEP'],
        'uses_functions' => [
            'Rich in essential fatty acids (Omegas 3, 6, 9)',
            'Improves skin elasticity and promotes cellular renewal',
            'Intensive hydration for dry, cracked and damaged skin',
            'Restores shine and silky smoothness to brittle hair'
        ],
        'image'          => 'assets/img/products/baobab.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ],

    // 25. Moringa Seed Oil
    [
        'id'             => 'moringa',
        'title'          => 'Moringa Seed Oil',
        'modal_title'    => 'MORINGA VEGETABLE OIL',
        'botanical_name' => 'Moringa oleifera',
        'inci_name'      => 'MORINGA OLEIFERA SEED OIL',
        'category'       => 'Vegetable Oils',
        'aromatic_desc'  => 'Mild, velvety, odorless to delicate nutty',
        'used_part'      => 'Shelled seeds',
        'collection'     => 'Culture',
        'process'        => 'First cold-pressing',
        'utilisation'    => 'Cosmetics, Anti-aging, Massage oils',
        'harvest_months' => ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
        'active_months'  => ['OCT', 'NOV', 'DEC', 'JAN', 'FEB'],
        'uses_functions' => [
            'High content of behenic acid (Ben oil) offering silky absorption',
            'Powerful antioxidant shield protecting against environmental pollutants',
            'Purifying, non-greasy moisturizing facial oil',
            'Exceptional shelf life and thermal stability'
        ],
        'image'          => 'assets/img/products/moringa.jpg',
        'certifications' => ['USDA', 'EU', 'ECOCERT']
    ]
];

$news = [
    [
        'id'          => 'biofach-vivaness-nuremberg',
        'date'        => '16 février 2024',
        'year'        => '2024',
        'title'       => 'BIOFACH / VIVANESS 2024 from February 13 to 16 in Nuremberg: the can\'t-miss destination for Organic fans.',
        'subtitle'    => 'Nuremberg Exhibition Centre, Germany',
        'excerpt'     => 'BIOFACH 2024 was an extraordinary opportunity for FLORAMAD (DHURIA) to showcase Madagascar\'s specific essential oils to exhibitors and visitors from around the world.',
        'content'     => "BIOFACH 2024 was an extraordinary opportunity for FLORAMAD (DHURIA) to showcase Madagascar's specific essential oils to exhibitors and visitors from around the world. This third participation has allowed us to cultivate new prospects and, more importantly, to strengthen existing partnerships.\n\nOnce again, we wish to express our sincere gratitude to all our visitors and honored partners, including the Import Promotion Desk – GIZ, SYMABIO, and PIC Agribusiness, whose support played a crucial role in the success of this event.\n\nWe look forward to continuing our collaborations and serving stakeholders worldwide in the aromatherapy, cosmetics, flavor and fragrance sectors.",
        'image'       => 'assets/img/news/biofach-nuremberg.jpg',
        'gallery'     => [
            'assets/img/news/gallery-2.jpg',
            'assets/img/news/gallery-1.jpg',
            'assets/img/news/gallery-3.jpg'
        ]
    ],
    [
        'id'          => 'csr-exhibition-fair',
        'date'        => '17 juillet 2023',
        'year'        => '2023',
        'title'       => 'Flora-of-Madagascar (FLORAMAD), a committed actor, at the 2023 CSR exhibition fair!',
        'subtitle'    => 'The Corporate Social Responsibility (CSR) and...',
        'excerpt'     => 'Flora-of-Madagascar had the opportunity to participate at this event, sharing good practices towards social and environmental challenges with private and public stakeholders.',
        'content'     => "The Corporate Social Responsibility (CSR) and Sustainable Development Initiative (SDI) fair was held from July 6th to 7th, 2023, at Novotel Alarobia – Antananarivo. Organized by Ur-CSR Consulting, the main topic for this 8th edition was: 'Private sector and biodiversity: opportunity or threat?', and has gathered numerous engaged actors from the private sector as well as from public organizations.\n\nAs a committed actor to a responsible approach, Flora-of-Madagascar had the opportunity to participate at this event. The 2 days allowed us to present our CSR achievements. It was also an occasion for us to exchange with other actors on good practices towards social and environmental challenges in different sector.\n\nOn July 17th, 2023, the Founder of FLORAMAD took part in the agribusiness platform on the theme « Societal CSR in the essential oil supply chain ». During his speech, he emphasized that 'Committing to CSR is an opportunity for companies, not only to meet customer's requirements, but above all for the sustainability of activities'.\n\nWe particularly thank the organizers of this event (Ur-CSR Consulting), our partners (AMCHAM, GEHEM, and the European Union), as well as our visitors during the exhibition fair.",
        'image'       => 'assets/img/news/csr-forum.jpg',
        'gallery'     => [
            'assets/img/news/gallery-3.jpg',
            'assets/img/news/gallery-2.jpg',
            'assets/img/news/gallery-1.jpg'
        ]
    ],
    [
        'id'          => 'sial-canada-expo',
        'date'        => '15 mai 2023',
        'year'        => '2023',
        'title'       => 'ESSENTIAL OILS FROM MADAGASCAR, EXHIBITED AT SIAL CANADA 2023',
        'subtitle'    => 'As a meeting point for agri-food industry professionals!',
        'excerpt'     => 'As a meeting point for agri-food industry professionals, SIAL Canada 2023 offered FLORAMAD a premier platform to exhibit pure aromatic extracts and virgin vegetable oils.',
        'content'     => "SIAL Canada in Toronto welcomed the DHURIA / FLORAMAD export delegation to introduce Madagascar's exceptional aromatic heritage to the North American marketplace. Distributors, culinary flavor houses, and organic cosmetic formulators praised our direct single-origin traceability and high active compound potency.\n\nNorth American buyers demonstrated great interest in our certified organic Ravintsara, Ylang Ylang Extra, and Calophyllum oil. Strong partnerships were established for direct container and pallet shipments.",
        'image'       => 'assets/img/news/sial-canada.jpg',
        'gallery'     => [
            'assets/img/news/gallery-1.jpg',
            'assets/img/news/gallery-3.jpg',
            'assets/img/news/gallery-2.jpg'
        ]
    ],
    [
        'id'          => 'economic-mission-romania',
        'date'        => '28/03/2024',
        'year'        => '2024',
        'title'       => 'On the way to new commercial horizons with the Economic and Trade Mission of the Francophonie in Central and Eastern Europe!',
        'subtitle'    => 'Bucharest - Romania, March 27 to 29, 2024',
        'excerpt'     => 'Flora-of-Madagascar (FLORAMAD) has been delighted to take part in the Economic and Trade Mission of the Francophonie in Bucharest, Romania.',
        'content'     => "Flora-of-Madagascar (FLORAMAD) has been delighted to take part in the Economic and Trade Mission of the Francophonie, in Bucharest - Romania from March 27 to 29, 2024.\n\nArranged by the OIF (International Organization of la Francophonie), this high-level event has gathered numerous key actors from Africa, Asia, North America, Europe and the Indian Ocean, offering a platform to explore new trade and investment opportunities.\n\nAs a company specialized in the production and exportation of essential oils from Madagascar, this meeting has firstly been for FLORAMAD a chance to explore new markets. It was also an unprecedented opportunity to build networks and partnerships in the agri-food sector, to explore new growth possibilities, and to strengthen our position on the international level.",
        'image'       => 'assets/img/news/romania-mission.jpg',
        'gallery'     => [
            'assets/img/news/gallery-1.jpg',
            'assets/img/news/gallery-2.jpg',
            'assets/img/news/gallery-3.jpg'
        ]
    ]
];

$certifications = [
    [
        'name'  => 'ECOCERT',
        'label' => 'Certified Organic by Ecocert',
        'logo'  => 'assets/img/certifications/ecocert.svg'
    ],
    [
        'name'  => 'USDA ORGANIC',
        'label' => 'National Organic Program Standard',
        'logo'  => 'assets/img/certifications/usda-organic.svg'
    ],
    [
        'name'  => 'EU ORGANIC',
        'label' => 'European Union Organic Agriculture',
        'logo'  => 'assets/img/certifications/eu-organic.svg'
    ]
];
