<?php
  //All
  $allPublicMessages = $db->allPublicMessages;
  $countAllPublicMessage = $db->countAllPublicMessage;

  // All unread
  $allUnread = $db->allUnread;
  $countAllUnread = $db->countAllUnread;

  // All read
  $allRead = $db->allRead;
  $countAllRead = $db->countAllRead;
?>
<div class="pg-messages">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item">Messages</li>
    </ul>
  </div>

   <!-- PLAQQUE -->
   <div class="cpn-plaque cpn-card">

      <!-- filtre -->
      <div class="page-content-filter">
        <ul class="page-content-filter__list">
          <li class="page-content-filter__list-item">
            <a href="<?=base_url().'admin/messages';?>" class="page-content-filter__list-item-link <?=(!isset($_GET['st']))? 'active':'';?>">
              <span class="text">Tous les messages</span>
              <span class="num"><?=$countAllPublicMessage;?></span>
            </a>
          </li>
          <li class="page-content-filter__list-item">
            <a href="<?=base_url().'admin/messages?st=unread';?>" class="page-content-filter__list-item-link b--green <?=(isset($_GET['st'])&&$_GET['st']=="unread")? 'active':'';?>">
              <span class="text">Messages non lus</span>
              <span class="num"><?=$countAllUnread;?></span>
            </a>
          </li>
          <li class="page-content-filter__list-item">
            <a href="<?=base_url().'admin/messages?st=read';?>" class="page-content-filter__list-item-link b--silver <?=(isset($_GET['st'])&&$_GET['st']=="read")? 'active':'';?>">
              <span class="text">Messages lus</span>
              <span class="num"><?=$countAllRead;?></span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Search -->
      <div class="cpn-search">
        <div class="cpn-search__content">
          <input type="search" placeholder="Recherche" class="cpn-search__field" name="searchMessage" data-search-target="searchMessages">
        </div>
      </div>

      <!-- plaque-second -->
      <div class="cpn-plaque-second cpn-check-list js-check-list cpn-grids">

        <div class="cpn-check-list__head">
          <div class="cpn-grid-btns">
            <button class="cpn-grid-list__btn active js-grids__btn" data-grid="1"><i class="icon-grid-x1"></i></button>
            <button class="cpn-grid-list__btn js-grids__btn"  data-grid="2"><i class="icon-grid-x2"></i></button>
            <button class="cpn-grid-list__btn js-grids__btn"  data-grid="3"><i class="icon-grid-x3"></i></button>
          </div>
          <div class="cpn-check-list__actions">
            <button class="cpn-check-list__btn b--delete js-change-status" data-core='{"status":"delete", "title":"Supprimer les messages sélèctionnés?", "id":"", "table":"public_messages", "multiple":"checkList-item--"}' title="Supprimer  les sélèctions" data-bs-toggle="modal" data-bs-target="#changeStatus"><i class="icon-email-deleted icon--red"></i></button>
            <button class="cpn-check-list__btn b--close js-change-status" data-core='{"status":"default", "title":"Marquer les messages comme non lus?", "id":"", "table":"public_messages", "multiple":"checkList-item--"}' title="Marquer les sélèctions comme non lus" data-bs-toggle="modal" data-bs-target="#changeStatus"><i class="icon-email-closed  icon--green"></i></button>
            <button class="cpn-check-list__btn b--open js-change-status" data-core='{"status":"active", "title":"Marquer les messages comme lus?", "id":"", "table":"public_messages", "multiple":"checkList-item--"}' title="Marquer les sélèctions comme lus" data-bs-toggle="modal" data-bs-target="#changeStatus"><i class="icon-email-opened"></i></button>
            
            <span class="cpn-check-list-parent">
              <input type="checkbox" name="check-list-parent" class="js-check-list-parent" id="checkListParent">
              <label class="text cpn-check-list__label field--right" for="checkListParent">Tout cocher</label>
            </span>
          </div>
        </div>

        <div class="cpn-email-list cpn-grids__list" id="searchMessages">
          <?php
            if($allPublicMessages):
              foreach($allPublicMessages as $allPublicMessage):
                $id = $allPublicMessage->id;
                $name = $allPublicMessage->last_name.' '.$allPublicMessage->first_name;
                $phone = $allPublicMessage->phone;
                $email = $allPublicMessage->email;
                $object = $allPublicMessage->object;
                $message = $allPublicMessage->message;
                $status = $allPublicMessage->status;
                $createdDate = $allPublicMessage->created_at;

                $codeColor = 'green';
                if($status==1) {
                  $codeColor = 'green';
                }else if($status==2) {
                  $codeColor = 'silver';
                }
                
                ?>
                  <div class="cpn-email-list__item cpn-grids__item">
                    <div class="cpn-email-list__item-head">
                      <span class="cpn-email-list__item-avatar"><img src="<?=base_url().'/assets/images/svg/icon-avatar-w.svg'?>" alt="user-avatar"></span>
                      <span class="cpn-email-list__item-status"></span>
                      <span class="cpn-email-list__item-name"><?=$name;?></span>
                      <span class="cpn-email-list__item-email"><?=$email;?></span>
                      <span class="cpn-email-list__item-date"><?=appDateFormat($createdDate);?></span>
                      <span class="cpn-email-list__item-actions cpn-dropdown">
                        <button class="cpn-email-list__item-actions-btn cpn-dropdown__btn"><i class="icon-menu-actions-vertical"></i></button>
                        <div class="cpn-dropdown__content cpn-dropdown__content--actions" position="left">
                          <ul class="cpn-dropdown__content-list">
                            
                            <?php 
                              if($status==1){
                                ?>
                                  <li class="cpn-dropdown__content-list-item">
                                    <a href="#" class="cpn-dropdown__content-list-item-link js-change-status" data-core='{"status":"active", "title":"Marquer ce message comme lu?", "id":<?=$id;?>, "table":"public_messages"}' data-bs-toggle="modal" data-bs-target="#changeStatus">
                                      <i class="icon-email-opened"></i>
                                      <span class="text">Marquer comme lu</span>
                                    </a>
                                  </li>
                                <?php
                              }else if($status==2){
                                ?>
                                  <li class="cpn-dropdown__content-list-item">
                                    <a href="#" class="cpn-dropdown__content-list-item-link js-change-status" data-core='{"status":"default", "title":"Marquer ce message comme non lu?", "id":<?=$id;?>, "table":"public_messages"}' data-bs-toggle="modal" data-bs-target="#changeStatus">
                                      <i class="icon-email-closed"></i>
                                      <span class="text">Marquer comme  non lu</span>
                                    </a>
                                  </li>
                                <?php
                              }
                            ?>
                            
                            <li class="cpn-dropdown__content-list-item">
                              <a href="#" class="cpn-dropdown__content-list-item-link js-change-status" data-core='{"status":"delete", "title":"Êtes-vous sûr de vouloir supprimer ce message?", "id":<?=$id;?>, "table":"public_messages"}' data-bs-toggle="modal" data-bs-target="#changeStatus">
                                <i class="icon-email-deleted"></i>
                                <span class="text">Supprimer</span>
                              </a>
                            </li> 
                          </ul>
                        </div>
                      </span>
                      <span class="cpn-check-list-item">
                        <input type="checkbox" name="checkList-item--<?=$id;?>" class="js-check-list-item" id="checkList-item--<?=$id;?>" data-id="<?=$id;?>">
                        <label class="text cpn-check-list__label field--right" for="checkList-item--<?=$id;?>"></label>
                      </span>
                    </div>
                    <div class="cpn-email-list__item-body">
                      <span class="cpn-email-list__item-object"><?=$object;?></span>
                      <span class="cpn-status-round--<?=$codeColor?>"></span>
                      <p class="cpn-email-list__item-textContent js-reduce-text"><?=$message;?></p>
                    </div>
                  </div>
                <?php
              endforeach;
            else:

            endif;
          ?>
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

</div>