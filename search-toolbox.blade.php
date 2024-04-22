<nav class="toolbox">
    <div class="toolbox-left">
        <div class="toolbox-item toolbox-sort">
            <div class="select-custom">
                <select name="orderby-search" class="form-control" id="orderby-search" canopus-showcase-infinite-scroll-sort >
                      <option value="" @if(request()->input('sort')==="")) selected @endif>
                        Ordenação padrão
                      </option>
                      <option value="price" @if(request()->input('sort')==="price") selected @endif>Preço : Do menor para o maior</option>
                      <option value="-price" @if(request()->input('sort')==="-price") selected @endif>Preço : Do maior para o menor</option>
                </select>
            </div><!-- End .select-custom -->
            <a href="#" class="sorter-btn" title="Set Ascending Direction"><span class="sr-only">Set Ascending Direction</span></a>
        </div><!-- End .toolbox-item -->
    </div><!-- End .toolbox-left -->
</nav>

 