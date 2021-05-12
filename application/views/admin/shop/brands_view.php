<?php
  $allShopBrands = $db->allShopBrands;
?>
<div class="pg-brands">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/shop/brands';?>" class="cpn-crumbs__list-item-link">Shop</a></li>
      <li class="cpn-crumbs__list-item">Marques</li>
    </ul>
  </div>

  <!-- PageMenu -->
  <?php $this->load->view('admin/shop/shop_menu_view');?>


  <!-- ACTIONS PAGES -->
  <div class="cpn-pg-actions">
    <ul class="cpn-pg-actions__list">
      <li class="cpn-pg-actions__list-item">
        <button class="cpn-pg-actions__list-item-btn" data-add-update-modal="newBrand" data-mode="create">
          <i class="icon-plus-02"></i>
          <span class="text">Novelle Marque</span>
        </button>
      </li>
    </ul>
  </div>

  <!-- PLAQQUE -->
  <div class="cpn-plaque cpn-card">

    <!-- Search -->
    <div class="cpn-search">
      <div class="cpn-search__content">
        <input type="search" placeholder="Recherche" class="cpn-search__field" data-search-target="searchShopBrands">
      </div>
    </div>

    <!-- TABLES -->
    <div class="cpn-wrap-table cpn-scroll-bar--xy">
      <table class="cpn-table js-tbl-sort" id="searchShopBrands">
        <thead>
          <tr>
            <th class="cpn-table__date">Date</th>
            <th class="cpn-table__name">Nom</th>
            <th>Description</th>
            <th class="cpn-table__actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if($allShopBrands):
              foreach($allShopBrands as $allShopBrand):
                $id = $allShopBrand->id;
                $name = $allShopBrand->name;
                $image = $allShopBrand->image;
                $description = $allShopBrand->description;
                $status = $allShopBrand->status;
                $createdDate = $allShopBrand->updated_at;
              ?>
                <tr>
                  <td><?=appDateFormat($createdDate);?></td>
                  <td>
                    <div class="cpn-tbl-item">
                      <div class="cpn-tbl-item__inner">
                        <div class="cpn-tbl-item__img">
                          <img src="<?=base_url().'assets/images/upload/brands/'.$image;?>" alt="brands logo">
                        </div>
                        <div class="cpn-tbl-item__infos">
                          <div class="cpn-tbl-item__infos-row cpn-tbl-item__infos-row--name"><?=$name;?></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td><?=$description;?></td>
                  <td>
                    <div class="cpn-table__actions-btns">
                      <button class="cpn-btn-switch js-btn-switch <?=($status==2)?'active':'';?>" data-core='{"status":"<?=($status==1)? "active":"default";?>", "id":"<?=$id;?>", "table":"shop_brands", "message":{"error":"Marque désactivée", "success":"Marque activée"}}'></button>
                      <button class="cpn-table__actions-item" data-add-update-modal="newBrand" data-mode="edit" data-infos="<?='shop_brands@@@'.$id?>"><i class="icon-edit"></i></button>
                    </div>
                  </td>
                </tr>
              <?php
              endforeach;
            else:
            endif;
          
          ?>
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