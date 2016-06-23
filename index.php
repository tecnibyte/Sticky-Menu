<?php

<!DOCTYPE html>

    <head>
    <script type="text/javascript" src="<?php echo $this->baseurl; ?>/templates/mi_template/assets/js/jquery.sticky.js"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function() {
if (jQuery( window ).width()>=780) {
				jQuery("#miclasecss").sticky({ topSpacing: 0});
			}
jQuery(window).resize(function() {
		if (jQuery( window ).width()>=780) {
				jQuery("#miclasecss").sticky({ topSpacing: 0});
			}
});
});

</script>  
</head>
<body>

</body>
</html>
