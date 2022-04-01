<?php

	/**
	 * SIDEBAR
	 */

?>

	<aside class="page-sidebar">
		<?php
			if(is_single()){
				if(is_active_sidebar('Sidebar')){
					dynamic_sidebar('Sidebar');
				}else{
					climainvestments_get_default_post_widgets();
				}
			}else{
				if(is_active_sidebar('Sidebar')){
					dynamic_sidebar('Sidebar');
				}else{
					climainvestments_get_default_page_widgets();
				}
			}
		?>
	</aside>
