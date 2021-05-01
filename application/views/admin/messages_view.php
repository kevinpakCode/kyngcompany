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
            <a href="#" class="page-content-filter__list-item-link">
              <span class="text">Tous les messages</span>
              <span class="num">12</span>
            </a>
          </li>
          <li class="page-content-filter__list-item">
            <a href="#" class="page-content-filter__list-item-link b--red">
              <span class="text">Messages non lus</span>
              <span class="num">660</span>
            </a>
          </li>
          <li class="page-content-filter__list-item">
            <a href="#" class="page-content-filter__list-item-link b--green">
              <span class="text">Messages lus</span>
              <span class="num">0</span>
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
            <button class="cpn-grid-list__btn js-grids__btn"  data-grid="3"><i class="icon-grid-x4"></i></button>
          </div>
          <div class="cpn-check-list__actions">
            <button class="cpn-check-list__btn b--delete"><i class="icon-email-deleted icon-email-deleted--red"></i></button>
            <button class="cpn-check-list__btn b--open"><i class="icon-email-opened "></i></button>
            <button class="cpn-check-list__btn b--close"><i class="icon-email-closed"></i></button>
            <span class="cpn-check-list-parent">
              <input type="checkbox" name="check-list-parent" class="js-check-list-parent" id="checkListParent">
              <label class="text cpn-check-list__label field--right" for="checkListParent">Tout cocher</label>
            </span>
          </div>
        </div>

        <div class="cpn-email-list cpn-grids__list" id="searchMessages">
          <div class="cpn-email-list__item cpn-grids__item">
            <div class="cpn-email-list__item-head">
              <span class="cpn-email-list__item-avatar"><img src="<?=base_url().'/assets/images/svg/icon-avatar-w.svg'?>" alt="user-avatar"></span>
              <span class="cpn-email-list__item-status"></span>
              <span class="cpn-email-list__item-name">Nom 1 et Prénoms</span>
              <span class="cpn-email-list__item-email">email@gmail.com</span>
              <span class="cpn-email-list__item-date">13-04-2020, 15:00</span>
              <span class="cpn-email-list__item-actions cpn-dropdown">
                <button class="cpn-email-list__item-actions-btn cpn-dropdown__btn"><i class="icon-menu-actions-vertical"></i></button>
                <div class="cpn-dropdown__content cpn-dropdown__content--actions" position="left">
                  <ul class="cpn-dropdown__content-list">
                    <li class="cpn-dropdown__content-list-item">
                      <a href="<?=base_url();?>" class="cpn-dropdown__content-list-item-link">
                        <i class="icon-email-opened"></i>
                        <span class="text">Marquer comme lu</span>
                      </a>
                    </li>
                    <li class="cpn-dropdown__content-list-item">
                      <a href="<?=base_url();?>" class="cpn-dropdown__content-list-item-link">
                        <i class="icon-email-deleted"></i>
                        <span class="text">Supprimer</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </span>
              <span class="cpn-check-list-item">
                <input type="checkbox" name="check-list-item" class="js-check-list-item" id="checkList-item">
                <label class="text cpn-check-list__label field--right" for="checkList-item"></label>
              </span>
            </div>
            <div class="cpn-email-list__item-body">
              <span class="cpn-email-list__item-object">Titre de l’objet ou demande 200</span>
              <span class="cpn-status-round--green"></span>
              <p class="cpn-email-list__item-textContent js-reduce-text">
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat culpa cillumullamco culpa fugiat cillum ullamco 
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco 
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa . 20
              </p>
              
            </div>
          </div>
          <div class="cpn-email-list__item cpn-grids__item">
            <div class="cpn-email-list__item-head">
              <span class="cpn-email-list__item-avatar"><img src="<?=base_url().'/assets/images/svg/icon-avatar-w.svg'?>" alt="user-avatar"></span>
              <span class="cpn-email-list__item-status"></span>
              <span class="cpn-email-list__item-name">Nom 4 et Prénoms</span>
              <span class="cpn-email-list__item-email">email@gmail.com</span>
              <span class="cpn-email-list__item-date">13-04-2020, 12:00</span>
              <span class="cpn-check-list-item">
                <input type="checkbox" name="check-list-item" class="js-check-list-item" id="checkList-item-1">
                <label class="text cpn-check-list__label field--right" for="checkList-item-1"></label>
              </span>
            </div>
            <div class="cpn-email-list__item-body">
              <span class="cpn-email-list__item-object">Titre de l’objet ou demande</span>
              <span class="cpn-status-round--green"></span>
              <p class="cpn-email-list__item-textContent js-reduce-text">
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat culpa cillumullamco culpa fugiat cillum ullamco 
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco 
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa .300 
              </p>
              
            </div>
          </div>
          <div class="cpn-email-list__item cpn-grids__item">
            <div class="cpn-email-list__item-head">
              <span class="cpn-email-list__item-avatar"><img src="<?=base_url().'/assets/images/svg/icon-avatar-w.svg'?>" alt="user-avatar"></span>
              <span class="cpn-email-list__item-status"></span>
              <span class="cpn-email-list__item-name">Nom 18 et Prénoms</span>
              <span class="cpn-email-list__item-email">email@gmail.com</span>
              <span class="cpn-email-list__item-date">13-04-2020, 17:00</span>
              <span class="cpn-check-list-item">
                <input type="checkbox" name="check-list-item" class="js-check-list-item" id="checkList-item-2">
                <label class="text cpn-check-list__label field--right" for="checkList-item-2"></label>
              </span>
            </div>
            <div class="cpn-email-list__item-body">
              <span class="cpn-email-list__item-object">Titre de l’objet ou demande</span>
              <span class="cpn-status-round--green"></span>
              <p class="cpn-email-list__item-textContent js-reduce-text">
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat culpa cillumullamco culpa fugiat cillum ullamco 
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco 
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa . 
              </p>
              
            </div>
          </div>
          <div class="cpn-email-list__item cpn-grids__item">
            <div class="cpn-email-list__item-head">
              <span class="cpn-email-list__item-avatar"><img src="<?=base_url().'/assets/images/svg/icon-avatar-w.svg'?>" alt="user-avatar"></span>
              <span class="cpn-email-list__item-status"></span>
              <span class="cpn-email-list__item-name">Nom 9 et Prénoms</span>
              <span class="cpn-email-list__item-email">email@gmail.com</span>
              <span class="cpn-email-list__item-date">13-04-2020, 22:00</span>
              <span class="cpn-check-list-item">
                <input type="checkbox" name="check-list-item" class="js-check-list-item" id="checkList-item-3">
                <label class="text cpn-check-list__label field--right" for="checkList-item-3"></label>
              </span>
            </div>
            <div class="cpn-email-list__item-body">
              <span class="cpn-email-list__item-object">Titre de l’objet ou demande</span>
              <span class="cpn-status-round--green"></span>
              <p class="cpn-email-list__item-textContent js-reduce-text">
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat culpa cillumullamco culpa fugiat cillum ullamco 
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco 
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa . 
              </p>
              
            </div>
          </div>
          <div class="cpn-email-list__item cpn-grids__item">
            <div class="cpn-email-list__item-head">
              <span class="cpn-email-list__item-avatar"><img src="<?=base_url().'/assets/images/svg/icon-avatar-w.svg'?>" alt="user-avatar"></span>
              <span class="cpn-email-list__item-status"></span>
              <span class="cpn-email-list__item-name">Nom et Prénoms</span>
              <span class="cpn-email-list__item-email">email@gmail.com</span>
              <span class="cpn-email-list__item-date">13-04-2020, 05:00</span>
              <span class="cpn-check-list-item">
                <input type="checkbox" name="check-list-item" class="js-check-list-item" id="checkList-item-4">
                <label class="text cpn-check-list__label field--right" for="checkList-item-4"></label>
              </span>
            </div>
            <div class="cpn-email-list__item-body">
              <span class="cpn-email-list__item-object">Titre de l’objet ou demande</span>
              <span class="cpn-status-round--green"></span>
              <p class="cpn-email-list__item-textContent js-reduce-text">
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat culpa cillumullamco culpa fugiat cillum ullamco 
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco 
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa . 
              </p>
              
            </div>
          </div>
          <div class="cpn-email-list__item cpn-grids__item">
            <div class="cpn-email-list__item-head">
              <span class="cpn-email-list__item-avatar"><img src="<?=base_url().'/assets/images/svg/icon-avatar-w.svg'?>" alt="user-avatar"></span>
              <span class="cpn-email-list__item-status"></span>
              <span class="cpn-email-list__item-name">Nom et Prénoms</span>
              <span class="cpn-email-list__item-email">email@gmail.com</span>
              <span class="cpn-email-list__item-date">13-04-2020, 10:00</span>
              <span class="cpn-check-list-item">
                <input type="checkbox" name="check-list-item" class="js-check-list-item" id="checkList-item-5">
                <label class="text cpn-check-list__label field--right" for="checkList-item-5"></label>
              </span>
            </div>
            <div class="cpn-email-list__item-body">
              <span class="cpn-email-list__item-object">Titre de l’objet ou demande</span>
              <span class="cpn-status-round--green"></span>
              <p class="cpn-email-list__item-textContent js-reduce-text">
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat culpa cillumullamco culpa fugiat cillum ullamco 
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco 
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa . 
              </p>
              
            </div>
          </div>
          <div class="cpn-email-list__item cpn-grids__item">
            <div class="cpn-email-list__item-head">
              <span class="cpn-email-list__item-avatar"><img src="<?=base_url().'/assets/images/svg/icon-avatar-w.svg'?>" alt="user-avatar"></span>
              <span class="cpn-email-list__item-status"></span>
              <span class="cpn-email-list__item-name">Nom et Prénoms</span>
              <span class="cpn-email-list__item-email">email@gmail.com</span>
              <span class="cpn-email-list__item-date">13-04-2020, 19:00</span>
              <span class="cpn-check-list-item">
                <input type="checkbox" name="check-list-item" class="js-check-list-item" id="checkList-item-6">
                <label class="text cpn-check-list__label field--right" for="checkList-item-6"></label>
              </span>
            </div>
            <div class="cpn-email-list__item-body">
              <span class="cpn-email-list__item-object">Titre de l’objet ou demande</span>
              <span class="cpn-status-round--green"></span>
              <p class="cpn-email-list__item-textContent js-reduce-text">
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat culpa cillumullamco culpa fugiat cillum ullamco 
                Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa Culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa fugiat cillum ullamco 
                culpa fugiat cillum ullamco culpa fugiat cillum ullamco culpa . 
              </p>
              
            </div>
          </div>
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