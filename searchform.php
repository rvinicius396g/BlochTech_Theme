<?php
/**
*Template Name: Search Form
**/
?>
<form action=" " method="get" accept-charset="utf-8" id="searchform" role="search" class="form-inline">
  <div>
    <input class="form-control" type="text" name="s" id="s" value="<?php the_search_query(); ?>"  placeholder="Pesquise..."/>
    <button type="submit" class="btn btn-default">
        <i class="glyphicon glyphicon-search">?</i>
    </button>
  </div>
</form>