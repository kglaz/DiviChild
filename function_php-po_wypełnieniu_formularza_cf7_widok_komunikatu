<?php
/**
 * Dodaje skrypt JavaScript do stopki strony, który przewija widok
 * do komunikatu Contact Form 7 po pomyślnym wysłaniu formularza.
 *
 * Pamiętaj, aby ZMIENIĆ '123456' na rzeczywiste ID Twojego formularza Contact Form 7.
 * ID znajdziesz w panelu WordPressa, w sekcji Kontakt -> Formularze kontaktowe,
 * obok shortcode'a formularza (np. [contact-form-7 id="123" title="Mój formularz"]).
 */
add_action( 'wp_footer', 'my_cf7_scroll_to_response_script' );
function my_cf7_scroll_to_response_script() {
    ?>
    <script type="text/javascript">
        // Nasłuchuj zdarzenia wysłania formularza Contact Form 7
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            // Sprawdź, czy zdarzenie pochodzi z konkretnego formularza (zastąp '123' swoim ID)
            // Jeśli chcesz, aby skrypt działał dla WSZYSTKICH formularzy CF7, możesz usunąć ten warunek if.
            if ( '123456' == event.detail.contactFormId ) {
                var form = event.target; // Pobierz element formularza, który został wysłany
                var responseOutput = form.querySelector('.wpcf7-response-output'); // Znajdź element komunikatu

                // Jeśli komunikat istnieje, przewiń do niego
                if (responseOutput) {
                    responseOutput.scrollIntoView({
                        behavior: 'smooth', // Płynne przewijanie
                        block: 'start'      // Element będzie widoczny na górze widoku
                    });
                }
            }
        }, false );
    </script>
    <?php
}
