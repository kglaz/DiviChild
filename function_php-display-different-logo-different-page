/* Display different logo if custom field is custom-page-one = 1 */ 
 
function my_conditional_logo( $logo_container ) { 
 
    $custom_logo = get_post_meta(get_the_ID(), 'custom-logo-one', true); 
    if($custom_logo == 1) { 
        $logo_url = 'https://judotg.pl/wp-content/uploads/2022/12/Rzadowy-Program-KLUB-logo-Witaj-W-Klubie-biale.png'; 
        // Set variable to match the HTML structure in Divi, but swap the image source for the $logo_url variable 
        $logo_container = '<div class="logo_container"><span class="logo_helper"></span><a href="/"><img src=" ' . $logo_url . ' " width="93" height="43" alt="Judo Tarnowskie Góry" id="logo" data-height-percentage="89" data-actual-width="381" data-actual-height="141"></a></div>'; 
 
    } 
        // Return variable to the server 
        return $logo_container; 
} 
 
// Run the custom function 
add_filter( 'et_html_logo_container', 'my_conditional_logo' ); 
