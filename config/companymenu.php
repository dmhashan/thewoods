<?php

return [
	'main' => [
		'home' => [
			'name' => 'Home',
			'url' => '/',
			'type' => 'single',
		],
		'activities' => [
			'name' => 'Activities',
			'url' => '/activities',
			'type' => 'dropdown',
			'ref' => 'activities_menu',
		],
		'accommodation' => [
			'name' => 'Accommodation',
			'url' => '/accommodation',
			'type' => 'imagedropdown',
			'ref' => 'accommodation_menu',
		],
		'tours' => [
			'name' => 'Tours',
			'url' => '/tours',
			'type' => 'single',
		],
		'conservation' => [
			'name' => 'Conservation',
			'url' => '/conservation',
			'type' => 'dropdown',
			'ref' => 'conservation_menu',
		],
		'agriculture' => [
			'name' => 'Agriculture',
			'url' => '/agriculture',
			'type' => 'dropdown',
			'ref' => 'agriculture_menu',
		],
		'contact' => [
			'name' => 'Contact',
			'url' => '/contact',
			'type' => 'single',
		],
	],

	'activities_menu' => [
		'spiritual' => [
			'name' => 'Spiritual',
			'url' => '/activities/spiritual',
			'type' => 'dropdown',
			'icon' => 'fa fa-fw fa-angle-right',
			'ref' => 'activities_spiritual_menu',
		],
		'wildlife' => [
			'name' => 'Wildlife',
			'url' => '/activities/wildlife',
			'type' => 'dropdown',
			'icon' => 'fa fa-fw fa-angle-right',
			'ref' => 'activities_wildlife_menu',
		],
		'adventure' => [
			'name' => 'Adventure',
			'url' => '/activities/adventure',
			'type' => 'dropdown',
			'icon' => 'fa fa-fw fa-angle-right',
			'ref' => 'activities_adventure_menu',
		],
		'art' => [
			'name' => 'Art',
			'url' => '/activities/art',
			'type' => 'dropdown',
			'icon' => 'fa fa-fw fa-angle-right',
			'ref' => 'activities_art_menu',
		],
	],

	'activities_spiritual_menu' => [
		'yoga' => [
			'name' => 'Yoga',
			'url' => 'activities/spiritual/yoga',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'meditation' => [
			'name' => 'Meditation',
			'url' => 'activities/spiritual/meditation',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],

	],

	'activities_wildlife_menu' => [
		'bird_watching' => [
			'name' => 'Bird Watching',
			'url' => 'activities/wildlife/bird-watching',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'butterfly_garden' => [
			'name' => 'Butterfly Garden',
			'url' => 'activities/wildlife/butterfly-garden',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'safari_and_photography' => [
			'name' => 'Safari & Photography',
			'url' => 'activities/wildlife/safari-and-photography',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],

	],

	'activities_adventure_menu' => [
		'hiking' => [
			'name' => 'Hiking',
			'url' => 'activities/adventure/hiking',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'caving' => [
			'name' => 'Caving',
			'url' => 'activities/adventure/caving',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'cycling' => [
			'name' => 'Cycling',
			'url' => 'activities/adventure/cycling',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'camping' => [
			'name' => 'Camping',
			'url' => 'activities/adventure/camping',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'diving_and_snorkeling' => [
			'name' => 'Diving & Snorkeling',
			'url' => 'activities/adventure/diving-and-snorkeling',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
	],

	'activities_art_menu' => [
		'music' => [
			'name' => 'Music',
			'url' => 'activities/art/music',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'painting' => [
			'name' => 'Painting',
			'url' => 'activities/art/painting',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],

	],

	'accommodation_menu' => [
		'cabana' => [
			'name' => 'Cabana',
			'url' => '/accommodation/cabana',
			'type' => 'single',
			'src' => '/assets/images/content/cabana.jpg',
		],
		'cottage' => [
			'name' => 'Cottage',
			'url' => '/accommodation/cottage',
			'type' => 'single',
			'src' => 'assets/images/content/cottage.jpg',
		],
		'bungalow' => [
			'name' => 'Bungalow',
			'url' => '/accommodation/bungalow',
			'type' => 'single',
			'src' => 'assets/images/content/bungalow.jpg',
		],
	],

	'conservation_menu' => [
		'flora_and_fauna' => [
			'name' => 'Flora & Fauna',
			'url' => '/conservation/flora-and-fauna',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'spandropdown',
			'ref' => 'flora_and_fauna_menu',
		],
	],

	'flora_and_fauna_menu' => [
		'trees_and_shrubs' => [
			'name' => 'Trees & Shrubs',
			'url' => '/conservation/trees-and-shrubs',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'amphibians' => [
			'name' => 'Amphibians',
			'url' => '/conservation/amphibians',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'reptiles' => [
			'name' => 'Reptiles',
			'url' => '/conservation/reptiles',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'dragonflies' => [
			'name' => 'Dragonflies',
			'url' => '/conservation/dragonflies',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'freshwater_fish' => [
			'name' => 'Freshwater Fish',
			'url' => '/conservation/freshwater-fish',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
	],

	'agriculture_menu' => [
		'plant_propagation_unit' => [
			'name' => 'Plant Propagation Unit',
			'url' => '/agriculture/plant-propagation-unit',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],
		'permaculture' => [
			'name' => 'Permaculture',
			'url' => '/agriculture/permaculture',
			'icon' => 'fa fa-fw fa-angle-right',
			'type' => 'single',
		],		
	]
];