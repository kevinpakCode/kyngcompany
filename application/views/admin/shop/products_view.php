<div class="pg-products">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/shop/products';?>" class="cpn-crumbs__list-item-link">Shop</a></li>
      <li class="cpn-crumbs__list-item">Produits</li>
    </ul>
  </div>

  <!-- PageMenu -->
  <?php $this->load->view('admin/shop/shop_menu_view');?>

  <!-- ACTIONS PAGES -->
  <div class="cpn-pg-actions">
    <ul class="cpn-pg-actions__list">
      <li class="cpn-pg-actions__list-item">
        <button class="cpn-pg-actions__list-item-btn" data-bs-toggle="modal" data-bs-target="#newProduct">
          <i class="icon-plus"></i>
          <span class="text">Noveau Produit</span>
        </button>
      </li>
    </ul>
  </div>

  <!-- PLAQQUE -->
  <div class="cpn-plaque cpn-card">

    <!-- Search -->
    <div class="cpn-search">
      <div class="cpn-search__content">
        <input type="search" placeholder="Recherche" class="cpn-search__field" name="searchMessage" id="searchMessageField">
      </div>
    </div>

    <!-- TABLES -->
    <div class="cpn-wrap-table cpn-scroll-bar--xy">
      <table class="cpn-table cpn-table--top">
        <thead>
          <tr>
            <th class="cpn-table__date">Date</th>
            <th class="cpn-table__name">Produits</th>
            <th>Prix</th>
            <th>Description</th>
            <th>stock</th>
            <th class="cpn-table__actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>22-05-2021, 18:00:00</td>
            <td>
              <div class="cpn-tbl-item cpn-tbl-item--small">
                <div class="cpn-tbl-item__inner">
                  <div class="cpn-tbl-item__img cpn-tbl-item__img--round">

                  </div>
                  <div class="cpn-tbl-item__infos">
                    <div class="cpn-tbl-item__infos-row cpn-tbl-item__infos-row--name">Iphone 11 Max-pro</div>
                    <div class="cpn-tbl-item__infos-row">
                      <span class="label">Catégorie:</span>
                      <span class="text">Smart phone</span>
                    </div>
                    <div class="cpn-tbl-item__infos-row">
                      <span class="label">Marque:</span>
                      <span class="text">Iphone</span>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <ul class="cpn-tbl-list">
                <li class="cpn-tbl-list__row">
                  <span class="label">D'achat:</span>
                  <span class="text">200 000f</span>
                </li>
                <li class="cpn-tbl-list__row">
                  <span class="label">De vente:</span>
                  <span class="text">300 000f</span>
                </li>
              </ul>
            </td>
            <td>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur reprehenderit 
              quae ducimus possimus odit excepturi cum ipsum, dignissimos quas animi expedita ex 
              harum voluptates quisquam earum, in praesentium? Fuga, cum.
            </td>
            <td>20</td>
            <td class="cpn-table__actions cpn-table__actions--right">
              <div class="cpn-table__actions-btns">
                <button class="cpn-btn-switch js-btn-switch"></button>
                <span class="cpn-dropdown">
                  <button class="cpn-email-list__item-actions-btn cpn-dropdown__btn"><i class="icon-menu-actions-vertical"></i></button>
                  <div class="cpn-dropdown__content cpn-dropdown__content--actions" position="left">
                    <ul class="cpn-dropdown__content-list">
                      <li class="cpn-dropdown__content-list-item">
                        <a href="<?=base_url().'admin/shop/product/2';?>" class="cpn-dropdown__content-list-item-link">
                          <i class="icon-eye-open"></i>
                          <span class="text">Voir</span>
                        </a>
                      </li>
                      <li class="cpn-dropdown__content-list-item">
                        <a href="<?=base_url();?>" class="cpn-dropdown__content-list-item-link" data-bs-toggle="modal" data-bs-target="#newProduct">
                          <i class="icon-edit"></i>
                          <span class="text">Modifier</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </span>
              </div>
            </td>
          </tr>
          <tr>
            <td>22-05-2021, 18:00:00</td>
            <td>
              <div class="cpn-tbl-item">
                <div class="cpn-tbl-item__inner">
                  <div class="cpn-tbl-item__img">
                  </div>
                  <div class="cpn-tbl-item__infos">
                    <div class="cpn-tbl-item__infos-row cpn-tbl-item__infos-row--name">Iphone 12 Max-pro</div>
                    <div class="cpn-tbl-item__infos-row">
                      <span class="label">Catégorie:</span>
                      <span class="text">Smart phone</span>
                    </div>
                    <div class="cpn-tbl-item__infos-row">
                      <span class="label">Marque:</span>
                      <span class="text">Iphone</span>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <ul class="cpn-tbl-list">
                <li class="cpn-tbl-list__row">
                  <span class="label">D'achat:</span>
                  <span class="text">200 000f</span>
                </li>
                <li class="cpn-tbl-list__row">
                  <span class="label">De vente:</span>
                  <span class="text">300 000f</span>
                </li>
              </ul>
            </td>
            <td>
              <div class="js-reduce-text">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur reprehenderit 
                quae ducimus possimus odit excepturi cum ipsum, dignissimos quas animi expedita ex 
                harum voluptates quisquam earum, in praesentium? Fuga, cum.
              </div>
            </td>
            <td>20</td>
            <td>
              <div class="cpn-table__actions-btns">
                <button class="cpn-btn-switch js-btn-switch"></button>
                <button class="cpn-table__actions-item"><i class="icon-pen"></i></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- PAGINATION -->
    <div class="cpn-pagination">
      <ul class="cpn-pagination__list">
        <li class="cpn-pagination__list-item cpn-pagination__btn">
          <a href="<?=base_url()?>" class="cpn-pagination__list-item-link cpn-pagination__btn-prev">
            <i class="icon-arrows-full-left"></i>
          </a>
        </li>
        <li class="cpn-pagination__list-item">
          <a href="<?=base_url()?>" class="cpn-pagination__list-item-link">1</a>
        </li>
        <li class="cpn-pagination__list-item">
          <a href="<?=base_url()?>" class="cpn-pagination__list-item-link active">2</a>
        </li>
        <li class="cpn-pagination__list-item">
          <a href="<?=base_url()?>" class="cpn-pagination__list-item-link">3</a>
        </li>
        <li class="cpn-pagination__list-item">
          <span class="">...</span>
        </li>
        <li class="cpn-pagination__list-item">
          <a href="<?=base_url()?>" class="cpn-pagination__list-item-link">60</a>
        </li>
        <li class="cpn-pagination__list-item cpn-pagination__btn">
          <a href="<?=base_url()?>" class="cpn-pagination__list-item-link cpn-pagination__btn-next">
            <i class="icon-arrows-full-right"></i>
          </a>
        </li>
      </ul>
    </div>
  
  </div>

  
</div>