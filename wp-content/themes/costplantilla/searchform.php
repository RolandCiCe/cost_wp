<form role="search"  method="get" action="<?php echo home_url( '/' );?>">
	<div class="input-group">
  		<input type="search" class="form-control" style="min-width: 300px!important;" placeholder="¿Qué información esta buscando?" id="search-txt" name="s" title="Search" value="<?php echo get_search_query();?>"> &nbsp; 

  		<div class="input-group-append">
  			<button type="submit" class="btn btn-primary"><span class="fa fa-search"></span></button>
  		</div>
	</div>
</form>
