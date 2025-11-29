<?php
// Aby zapewnić dostępność cyfrową musi pojawić się znacznik H! na górze strony.
// Logotyp Divi nie ma tego znacznika, poniżej kod zamieniający jeden z kontenerów  
// otaczających logotyp na H1.

function change_logo_container_to_h1( $logo_html ) {

    // Zamiana otwierającego kontenera
    $logo_html = str_replace(
        '<div class="logo_container">',
        '<h1 class="logo_container">', 
        $logo_html
    );

    // Zamiana zamykającego kontenera (tylko pierwsze wystąpienie)
    // aby nie naruszyć innych divów Divi
    $logo_html = preg_replace('/<\/div>/', '</h1>', $logo_html, 1);

    return $logo_html;
}
add_filter( 'et_html_logo_container', 'change_logo_container_to_h1' );
