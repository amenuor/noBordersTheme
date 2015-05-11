<?php 

function nawart_theme_menu() {
 
    add_dashboard_page(
        'Nawart Theme',            // The title to be displayed in the browser window for this page.
        'Nawart Theme',            // The text to be displayed for this menu item
        'delete_others_pages',           // Which type of users can see this menu item
        'nawart_theme_options',   // The unique ID - that is, the slug - for this menu item
        'nawart_theme_display'    // The name of the function to call when rendering this menu's page
    );
 
} // end sandbox_example_theme_menu
add_action( 'admin_menu', 'nawart_theme_menu' );
 
/**
 * Renders a simple page to display for the theme menu defined above.
 */
function nawart_theme_display() {
?>
    <!-- Create a header in the default WordPress 'wrap' container -->
    <div class="wrap">
     
        <div id="icon-themes" class="icon32"></div>
        <h2>Nawart Theme Options</h2>
        <?php settings_errors(); ?>
         
        <form method="post" action="options.php">
            <?php settings_fields( 'nawart_theme_display_options' ); ?>
            <?php do_settings_sections( 'nawart_theme_display_options' ); ?>         
            <?php submit_button(); ?>
        </form>
         
    </div><!-- /.wrap -->
<?php
} // end sandbox_theme_display
 
function nawart_initialize_theme_options() {
 
    // If the theme options don't exist, create them.
    if( false == get_option( 'nawart_theme_display_options' ) ) {  
        add_option( 'nawart_theme_display_options' );
    } // end if
 
    // First, we register a section. This is necessary since all future options must belong to a 
    add_settings_section(
        'departure_settings_section',      // ID used to identify this section and with which to register options
        'Departure Box Options',           // Title to be displayed on the administration page
        'nawart_departure_settings_callback', // Callback used to render the description of the section
        'nawart_theme_display_options'     // Page on which to add this section of options
    );
     
    // Next, we'll introduce the fields for toggling the visibility of content elements.
    add_settings_field( 
        'days_spent',                      		// ID used to identify the field throughout the theme
        'Numero giorni',    					// The label to the left of the option interface element
        'nawart_text_departure_days_callback',  // The name of the function responsible for rendering the option interface
        'nawart_theme_display_options',    		// The page on which this option will be displayed
        'departure_settings_section',         	// The name of the section to which this field belongs
        array(                              	// The array of arguments to pass to the callback. In this case, just a description.
            'Da quanti giorni siete in viaggio?'
        )
    );
     
    add_settings_field( 
        'current_location',                     
        'Cittá',              
        'nawart_text_departure_location_callback',  
        'nawart_theme_display_options',                    
        'departure_settings_section',         
        array(                              
            'Nome della cittá nella quale siete al momento.'
        )
    );
     
    add_settings_field( 
        'steps_counter',                      
        'Conta-passi',               
        'nawart_text_departure_steps_callback',   
        'nawart_theme_display_options',        
        'departure_settings_section',         
        array(                              
            'Numero dei passi effettuati fino ad adesso.'
        )
    );
     
    // Finally, we register the fields with WordPress
    register_setting(
        'nawart_theme_display_options',
        'nawart_theme_display_options'
    );
     
} // end sandbox_initialize_theme_options
add_action('admin_init', 'nawart_initialize_theme_options');
 
function nawart_departure_settings_callback() {
    echo '<p>Opzioni per la Departure box sulla front page.</p>';
} // end sandbox_general_options_callback
 
function nawart_text_departure_days_callback($args) {
     
    // First, we read the options collection
    $options = get_option('nawart_theme_display_options');
     
    // Next, we update the name attribute to access this element's ID in the context of the display options array
    // We also access the show_header element of the options collection in the call to the checked() helper function
    $html = '<input type="text" id="days_spent" name="nawart_theme_display_options[days_spent]" value="' . $options['days_spent'] . '"/>'; 
     
    // Here, we'll take the first argument of the array and add it to a label next to the checkbox
    $html .= '<label for="days_spent"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} // end sandbox_toggle_header_callback
 
function nawart_text_departure_location_callback($args) {
 
    $options = get_option('nawart_theme_display_options');
     
    $html = '<input type="text" id="current_location" name="nawart_theme_display_options[current_location]" value="' . $options['current_location'] . '"/>'; 
    $html .= '<label for="current_location"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} // end sandbox_toggle_content_callback
 
function nawart_text_departure_steps_callback($args) {
     
    $options = get_option('nawart_theme_display_options');
	
     
    $html = '<input type="text" id="steps_counter" name="nawart_theme_display_options[steps_counter]" value="' . $options['steps_counter'] . '"/>'; 
    $html .= '<label for="steps_counter"> '  . $args[0] . '</label>'; 
     
    echo $html;
     
} // end sandbox_toggle_footer_callback
?>