<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">

    <div class="input-group">
        <input type="search" class="form-control" name="s" id="s" placeholder="<?php _e('Search by terms', 'opslens'); ?>" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button id="searchsubmit" class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
