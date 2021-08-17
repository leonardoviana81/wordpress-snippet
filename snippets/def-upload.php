<?php
//---------------------------------------------------------------------------------------
// Define "Upload Files" selecionado por padrão quando for enviar alguma Mídia 
//---------------------------------------------------------------------------------------
add_action( 'admin_footer-post-new.php', 'media_manager_default' );
add_action( 'admin_footer-post.php', 'media_manager_default' );
function media_manager_default() {
?>
<script type="text/javascript">
	jQuery(document).ready(function($){
		wp.media.controller.Library.prototype.defaults.contentUserSetting=false;
	});
</script>
<?php } ?>