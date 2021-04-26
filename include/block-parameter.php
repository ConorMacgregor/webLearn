<div id="block-parameter">
<p class="header-title">Поиск по параментрам</p>
<p  class="title-filter">Стоимость</p>
<form method="GET" action="search-filter.php">
<div id="block-input-price">
<ul>
<li> <p>от</p></li>
<li><input type="text" id="start-price" name="start_price" value="1000" /> </li>
<li> <p>до</p></li>
<li><input type="text" id="end-price" name="end_price" value="30000" /> </li>
<li> <p>руб</p></li>
</ul>

</div>

<div id="blocktrackbar"></div>

<p  class="title-filter">Производители</p>
<ul class="checkbox-brand">
<li><input type="checkbox" id="checkbrand1"/><label for="checkbrand1">Бренд 1</label> </li>
<li><input type="checkbox" id="checkbrand2"/><label for="checkbrand2">Бренд 2</label> </li>
<li><input type="checkbox" id="checkbrand3"/><label for="checkbrand3">Бренд 3</label> </li>

</ul>


<input   type="submit" name="submit" id="button-param-search" onblur="" value="Найти" 
/>
<a></a>
</form>

</div>