<form role="search" method="get" id="searchform" class="searchform" action="<?= home_url('/'); ?>">
    <div>
        <!--<label class="screen-reader-text" for="s">Buscar:</label>-->
        <input type="text" value="" name="s" id="s" placeholder=" Busqueda">
        <!--<input type="submit" id="searchsubmit" value="Buscar">-->
        <button type="submit" id="searchsubmit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
        
    </div>
</form>