<div class="cpn-pg pg-shop">
  <!-- PAGE HEAD -->
  <div class="cpn-pg__head">
    <div class="cpn-container">
      <!-- CRUMBS -->
      <div class="cpn-crumbs">
        <ul class="cpn-crumbs__list">
          <li class="cpn-crumbs__list-item"><a href="<?=base_url();?>" class="cpn-crumbs__list-item-link">Accueil</a></li>
          <li class="cpn-crumbs__list-item">Boutique</li>
        </ul>
      </div>

    </div>
  </div>


  <!-- PAGE Body -->
  <div class="cpn-pg__body">
    <div class="cpn-container">
      <div class="cpn-pg__body-inner">
        <aside class="cpn-pg__aside js-aside-list">
          <h2 class="cpn-pg__aside-title">
            <i class="icon-menu-hamberger cpn-pg__aside-title-icon"></i> Catalogue d'articles
          </h2>
          <!-- SHOP ASIDE -->
          <?php  $this->load->view('public/widgets/shop-aside_view');?>
        </aside>
        <section class="cpn-pg__section cpn-grids">
          <!-- PAGE TITLE -->
          <div class="pg-shop__head">
            <h1 class="cpn-h1 pg-news__title cpn-pg__section-title">Boutique</h1>
            <div class="cpn-grid-btns">
              <button class="cpn-grid-list__btn js-grids__btn" data-grid="2"><i class="icon-grid-x2"></i></button>
              <button class="cpn-grid-list__btn js-grids__btn active" data-grid="3"><i class="icon-grid-x3"></i></button>
            </div>
          </div>

          <div class="cpn-products">
            <ul class="cpn-products__list cpn-grids__list">
              <li class="cpn-products__item">
                <div class="cpn-products__item-img">
                  <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-1.png'?>" alt="iphone-12-pro-max">
                </div>
                <div class="cpn-products__item-name">Iphone 11-max pro Iphone 11-max pro </div>
                <span class="cpn-products__item-price">20 000fr cfa</span>
                <div class="cpn-products__item-action">
                  <button class="cpn-products__item-add">
                    <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                  </button>
                  <a href="<?=base_url().'shop/product/25';?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-2.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone</div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-1.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone 11-max pro Iphone 11-max pro</div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-2.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone 11-max pro Iphone 11-max pro Iphone 11-max pro</div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-1.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone 11-max pro </div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-2.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone</div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-1.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone 11-max pro Iphone 11-max pro</div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-2.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone 11-max pro Iphone 11-max pro Iphone 11-max pro</div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-1.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone 11-max pro </div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-2.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone</div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-1.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone 11-max pro Iphone 11-max pro</div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
              <li class="cpn-products__item">
                  <div class="cpn-products__item-img">
                    <img src="<?=base_url().'assets/images/upload/products/dafault/iphone-12-pro-max-2.png'?>" alt="iphone-12-pro-max">
                  </div>
                  <div class="cpn-products__item-name">Iphone 11-max pro Iphone 11-max pro Iphone 11-max pro Iphone 11-max pro</div>
                  <span class="cpn-products__item-price">20 000fr cfa</span>
                  <div class="cpn-products__item-action">
                    <button class="cpn-products__item-add">
                      <i class="icon-shopping-cart cpn-products__item-add-icon"></i> Ajouter
                    </button>
                    <a href="<?=base_url();?>" class="cpn-products__item-link"><i class="icon-eye-open cpn-products__item-link-icon"></i></a>
                  </div>
              </li>
            </ul>
          </div>

        </section>
      </div>
    </div>


  </div>


</div>