<div class="header-search" style="border:none;">
    <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
    <form action="/busca" method="get" id="search-form" style="border:none;">
        <div class="header-search-wrapper" style="border:none;">
            <input type="search" class="form-control" name="term" id="term" placeholder="Pesquisar por..." required autocomplete="off" style="border:1px solid #762432; border-radius:100px;">
         <input type="hidden" value="24" name="size" />
            <button class="btn" type="submit"  style="min-height: 50px; border:none; background-color:#762432; border-radius:100px; color:#fff; margin-left:10px;"><i class="icon-magnifier"></i></button>
        </div><!-- End .header-search-wrapper -->
    </form>
        <div class="search-results"></div>
    
</div><!-- End .header-search -->

@mobile
    <style>
        .search-results{
            width: 320px !important;
            top: 93px !important;
            left: -250px !important;
        }
    </style>
@endmobile