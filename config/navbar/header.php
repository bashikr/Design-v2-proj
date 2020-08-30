<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Home",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "About",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Blog",
            "url" => "blogg",
            "title" => "Mina bloggar.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Products",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "Bew's products",
                    ],
                    [
                        "text" => "Time to move",
                        "url" => "blogg/mitt-andra-inlagg",
                        "title" => "Time to move",
                    ],
                    [
                        "text" => "Trends",
                        "url" => "blogg/mitt-tredje-inlagg",
                        "title" => "Trends 2020",
                    ],
                ],
            ],
        ],
        [
            "text" => "Styles",
            "url" => "style",
            "title" => "Välj stylesheet.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Dark",
                        "url" => "index?style=dark.min",
                        "title" => "Dark theme.",
                    ],
                    [
                        "text" => "Bright",
                        "url" => "index?style=bright.min",
                        "title" => "Bright theme.",
                    ],
                ],
            ],
        ],
    ],
];
