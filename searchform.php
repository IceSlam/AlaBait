<form style="border:none;box-shadow:none;padding:16px 0;margin-bottom:1em;" role="search" method="get" id="searchform" class="is-products__form-main"  action="<?php echo home_url( '/' ) ?>" >
	<label class="screen-reader-text" for="s">Поиск: </label>
	<input style="height:50px;font-size:1em;display:inline-block;max-width:80%;" type="name" class="form-control" placeholder="Поиск по сайту: введите Ваш запрос" value="<?php echo get_search_query() ?>" name="s" id="s" />
	<button style="height:50px;font-size:1em;display:inline-block;max-width:19.5%;width:100%;color:#fff;border:3px solid #FF7835;" type="submit" id="searchsubmit" ><i class="fas fa-search"></i> Найти</button>
</form>
