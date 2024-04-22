
<style>
    
    /* Mobile Menu Overlay */
.mobile-menu-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  z-index: 1000;
  display: none;
}

.mobile-menu-container {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  width: 80%;
  max-width: 300px;
  background: #fff;
  z-index: 1001;
  transform: translateX(100%);
  transition: transform 0.3s ease;
}

.mobile-menu-wrapper {
  height: 100%;
  overflow-y: auto;
}

.mobile-menu-close {
  display: block;
  font-size: 24px;
  color: #333;
  cursor: pointer;
  padding: 20px;
  text-align: right;
}

.mobile-nav {
  padding: 20px;
}

.mobile-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.mobile-menu li {
  margin-bottom: 10px;
  margin-top: 10px !important;
}

.mobile-menu a {
  margin-top:15px !important;
  height:100% !important;
  text-decoration: none;
  font-size:16px !important;
  color: #000 !important;
  display: block;
  padding: 10px;
  border-radius: 5px;
  transition: background 0.3s ease;
}

.mobile-menu a:hover {
  background: #762432;
  color:#fff !important;
}

.has-submenu ul {
  display: none;
  margin-top: 5px;
}

.has-submenu:hover ul {
  display: block;
}

.submenu {
  margin-left: 15px;
}

/* Empty Sub-Category */
    
</style>


<script>
  // Adicione este trecho de código para controlar o comportamento do submenu
  document.addEventListener('DOMContentLoaded', function () {
    var produtosLink = document.querySelector('.open-submenu');
    var produtosSubmenu = produtosLink.nextElementSibling;

    produtosLink.addEventListener('click', function (event) {
      event.preventDefault();
      produtosSubmenu.style.display = produtosSubmenu.style.display === 'block' ? 'none' : 'block';
    });
  });
</script>

<div class="mobile-menu-overlay"></div>
<div class="mobile-menu-container">
  <div class="mobile-menu-wrapper">
    <span class="mobile-menu-close"><i class="far fa-times-circle"></i></span>
    <nav class="mobile-nav">
      <ul class="mobile-menu">
        @foreach($mainMenuCategories->collection as $category)
          <li style="margin-top:20px !important; font-weight:500 !important;">
            <a href="/{{$category->urls->first()->url}}" class="{{ $category->children->count() > 0 ? 'has-submenu' : 'empty-sub-category' }} {{ $category->name === 'Produtos' ? 'open-submenu' : '' }}">
              {{$category->name}}
              @if($category->children->count() > 0)
                <i style="font-size:20px; float:right; margin-right:5px;" class="far fa-arrow-alt-circle-down"></i>
              @endif
            </a>
            @if($category->children->count() > 0)
              <ul class="submenu">
                @foreach($category->children as $subCategoryLevel1)
                  <li>
                    <a href="/{{ $subCategoryLevel1->urls->first()->url }}">
                      {{$subCategoryLevel1->name}}
                      @if($subCategoryLevel1->children->count() > 0)
                        <i style="font-size:20px; float:right; margin-right:5px;" class="far fa-arrow-alt-circle-down"></i>
                      @endif
                    </a>
                    @if($subCategoryLevel1->children->count() > 0)
                      <ul class="submenu">
                        @foreach($subCategoryLevel1->children as $subCategoryLevel2)
                          <li>
                            <a href="/{{$subCategoryLevel2->urls->first()->url}}">
                              {{$subCategoryLevel2->name}}
                            </a>
                          </li>
                        @endforeach
                      </ul>
                    @endif
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
        @endforeach
      </ul>
    </nav>
  </div>
</div>