<?php
  $allShopCharacteristics = $db->allShopCharacteristics;
?>
<div class="pg-characteristics">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/shop/products';?>" class="cpn-crumbs__list-item-link">Shop</a></li>
      <li class="cpn-crumbs__list-item">Caratéristiques</li>
    </ul>
  </div>

  <!-- PageMenu -->
  <?php $this->load->view('admin/shop/shop_menu_view');?>

   <!-- ACTIONS PAGES -->
   <div class="cpn-pg-actions">
    <ul class="cpn-pg-actions__list">
      <li class="cpn-pg-actions__list-item">
        <button class="cpn-pg-actions__list-item-btn" data-bs-toggle="modal" data-bs-target="#newCharacteristic">
          <i class="icon-plus-02"></i>
          <span class="text">Noveau caratéristique</span>
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
            <th class="cpn-table__name">Caratéristiques</th>
            <th>Description</th>
            <th class="cpn-table__actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if($allShopCharacteristics) {
              foreach($allShopCharacteristics as $allShopCharacteristic):
                  $id = $allShopCharacteristic->id;
                  $name = $allShopCharacteristic->name;
                  $description = $allShopCharacteristic->description;
                  $status = $allShopCharacteristic->status;
                  $createdDate = $allShopCharacteristic->updated_at;
                ?>
                  <tr>
                    <td><?=appDateFormat($createdDate);?></td>
                    <td>
                      <span class="text"><?=$name;?></span>
                    </td>
                    <td>
                      <span class="text"><?=$description;?></span>
                    </td>
                    <td class="cpn-table__actions">
                      <div class="cpn-table__actions-btns">
                        <button class="cpn-btn-switch js-btn-switch <?=($status==2)?'active':'';?>" data-core='{"status":"<?=($status==1)? "active":"default";?>", "id":"<?=$id;?>", "table":"shop_characteristics", "message":{"error":"Caractéristique désactivé", "success":"Caractéristique activé"}}'></button>
                        <button class="cpn-table__actions-item" data-add-update-modal="newCharacteristic" data-mode="edit" data-infos="<?='shop_characteristics@@@'.$id?>"><i class="icon-edit"></i></button>
                      </div>
                    </td>
                  </tr>
                <?php
              endforeach;
            }
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