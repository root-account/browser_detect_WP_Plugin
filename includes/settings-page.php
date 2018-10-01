<?php

add_action( 'admin_init', function() {
    register_setting( 'browser_detect_plugin_settings', 'map_name' );
});


add_action( 'admin_init', function() {
    register_setting( 'browser_detect_plugin_settings', 'map_option_3' );
});


function browser_detect_plugin_page() {
 ?>
   <div class="wrap">
     <h2>Browser Detect</h2>


      <form action="options.php" method="post">
 
        <?php
          settings_fields( 'browser_detect_plugin_settings' );
          do_settings_sections( 'browser_detect_plugin_settings' );
        ?>
        <table>
 
            <tr>
                <th>Check for Internet Explorer?</th>
                <td>
 
                    <select name="map_option_3">
                        <option value="">&mdash; select &mdash;</option>
                        <option value="Yes" <?php echo esc_attr( get_option('map_option_3') ) == 'Yes' ? 'selected="selected"' : ''; ?>>Yes</option>
                        <option value="No" <?php echo esc_attr( get_option('map_option_3') ) == 'No' ? 'selected="selected"' : ''; ?>>No</option>
                    </select>
 
                </td>
            </tr>

 
            <tr>
                <td><?php submit_button(); ?></td>
            </tr>
 
        </table>
	</form>
   </div>
 <?php

}

?>