<div class="pg-orders">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item">Les Commandes</li>
    </ul>
  </div>

  <!-- PageMenu -->
  <div class="cpn-plaque">

    <div class="cpn-plaque__inner cpn-card">
      <!-- filtre -->
      <div class="page-content-filter">
        <ul class="page-content-filter__list">
          <li class="page-content-filter__list-item">
            <a href="#" class="page-content-filter__list-item-link">
              <span class="text">Toutes les commandes</span>
              <span class="num">12</span>
            </a>
          </li>
          <li class="page-content-filter__list-item">
            <a href="#" class="page-content-filter__list-item-link b--red">
              <span class="text">Commandes en attentes</span>
              <span class="num">660</span>
            </a>
          </li>
        </ul>
      </div>

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
              <th class="cpn-table__name">Clients</th>
              <th>Total Commande</th>
              <th>Nbr Produits</th>
              <th class="cpn-table__actions">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>12-03-2021, 20:18</td>
              <td>
                <div class="cpn-tbl-item cpn-tbl-item--small">
                  <div class="cpn-tbl-item__inner">
                    <div class="cpn-tbl-item__img cpn-tbl-item__img--round">
                      <img src="<?=base_url().'/assets/images/svg/avatar-02.svg'?>" alt="clients avatar">
                    </div>
                    <div class="cpn-tbl-item__infos">
                      <div class="cpn-tbl-item__infos-row cpn-tbl-item__infos-row--name">Kevin Kombetto</div>
                      <div class="cpn-tbl-item__infos-row">
                        <span class="label">Téléphone:</span>
                        <span class="text">+229 97 97 98 98</span>
                      </div>
                      <div class="cpn-tbl-item__infos-row">
                        <span class="label">Email:</span>
                        <span class="text">kevinpak@yandex.ru</span>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td>5 000 000f</td>
              <td>16</td>
              <td>
                <div class="cpn-table__actions-btns cpn-table__actions-btns--row">
                  <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#newCharacteristic">Voir <i class="icon-eye-open"></i></button>
                  <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#newCharacteristic"><span class="cpn-status-color--waiting">En attente</span><i class="icon-edit"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>12-03-2021, 20:18</td>
              <td>
                <div class="cpn-tbl-item cpn-tbl-item--small">
                  <div class="cpn-tbl-item__inner">
                    <div class="cpn-tbl-item__img cpn-tbl-item__img--round">
                      <img src="<?=base_url().'/assets/images/svg/avatar-02.svg'?>" alt="clients avatar">
                    </div>
                    <div class="cpn-tbl-item__infos">
                      <div class="cpn-tbl-item__infos-row cpn-tbl-item__infos-row--name">Kevin Kombetto</div>
                      <div class="cpn-tbl-item__infos-row">
                        <span class="label">Téléphone:</span>
                        <span class="text">+229 97 97 98 98</span>
                      </div>
                      <div class="cpn-tbl-item__infos-row">
                        <span class="label">Email:</span>
                        <span class="text">kevinpak@yandex.ru</span>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td>5 000 000f</td>
              <td>16</td>
              <td>
                <div class="cpn-table__actions-btns cpn-table__actions-btns--row">
                  <a href="<?=base_url().'admin/orders/5'?>" class="cpn-table__actions-item">Voir <i class="icon-eye-open"></i></a>
                  <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#changeStatusOrder"><span class="cpn-status-color--treatment">En attente</span><i class="icon-edit"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>12-03-2021, 20:18</td>
              <td>
                <div class="cpn-tbl-item cpn-tbl-item--small">
                  <div class="cpn-tbl-item__inner">
                    <div class="cpn-tbl-item__img cpn-tbl-item__img--round">
                      <img src="<?=base_url().'/assets/images/svg/avatar-02.svg'?>" alt="clients avatar">
                    </div>
                    <div class="cpn-tbl-item__infos">
                      <div class="cpn-tbl-item__infos-row cpn-tbl-item__infos-row--name">Kevin Kombetto</div>
                      <div class="cpn-tbl-item__infos-row">
                        <span class="label">Téléphone:</span>
                        <span class="text">+229 97 97 98 98</span>
                      </div>
                      <div class="cpn-tbl-item__infos-row">
                        <span class="label">Email:</span>
                        <span class="text">kevinpak@yandex.ru</span>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td>5 000 000f</td>
              <td>16</td>
              <td>
                <div class="cpn-table__actions-btns cpn-table__actions-btns--row">
                  <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#newCharacteristic">Voir <i class="icon-eye-open"></i></button>
                  <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#newCharacteristic"><span class="cpn-status-color--deliver">En attente</span><i class="icon-edit"></i></button>
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

</div>