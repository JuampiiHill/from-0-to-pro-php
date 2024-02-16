<?php 

function get_country_name_switch($country) {
    $name = "";

    switch ($country) {
        case 'MX':
            $name = "Mexico";
            break;
        
        case 'AR':
            $name = 'Argentina';
            break;

        case 'COL':
            $name = 'Colombia';
            break;

        default:
        $name = 'No conozco ese pais';
        break;
    }

    return $name;
}

echo get_country_name_switch('MX');


function get_country_name_match($country) {
    return match ($country) {
        "MX" => "Mexico",
        "COL" => "Colombia",
        "AR" => "Argentina",
        default => "No conozco ese pais"
    };
}

echo get_country_name_match("COL");