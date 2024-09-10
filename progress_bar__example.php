<?php
/**
 *  @file       progress_bar__example.php
 *  @brief      Testing progress_bar.php
 *  
 *  @details    Loops with both under- and overrun
 *  
 *  @copyright  http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 *  @author     Erik Bachmann <ErikBachmann@ClicketyClick.dk>
 *  @since      2024-08-29T17:16:25 / erba
 *  @version    2024-08-29T17:16:25
 */
include_once( 'progress_bar.php' );


for($x=-1;$x<=101;$x++){    // Test both under and over run
    $buffer = show_status($x,100);
    usleep(100000);

}

?>
