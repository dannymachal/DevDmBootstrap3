<div class="search-box">
	<form method="get" class="input-group" action="<?php echo home_url() ; ?>/" role="search">
		<input type="text" class="form-control searchform" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" placeholder="Search for...">
      		<span class="input-group-btn">
        		<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
      		</span>
	</form>
</div>