<div class="pg-clients">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item">Les Clients</li>
    </ul>
  </div>

  <!-- PLAQUE -->
  <div class="cpn-plaque">
    <div class="cpn-plaque__inner cpn-card">
      
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
              <th>Adresses</th>
              <th>Total Commandes</th>
              <th class="cpn-table__actions">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>12-03-2021, 20:18</td>
              <td>
                <div class="cpn-tbl-item cpn-tbl-item--medium">
                  <div class="cpn-tbl-item__inner">
                    <div class="cpn-tbl-item__img cpn-tbl-item__img--round">
                      <img src="<?=base_url().'/assets/images/svg/avatar-02.svg'?>" alt="clients avatar">
                    </div>
                    <div class="cpn-tbl-item__infos">
                      <div class="cpn-tbl-item__infos-row cpn-tbl-item__infos-row--name">Kevin Kombetto</div>
                      <div class="cpn-tbl-item__infos-row cpn-tbl-item__infos-row--with-icon">
                        <span class="label"><i class="icon-phone"></i></span>
                        <span class="text">+229 97 97 98 98</span>
                      </div>
                      <div class="cpn-tbl-item__infos-row cpn-tbl-item__infos-row--with-icon">
                        <span class="label"><i class="icon-email-closed"></i></span>
                        <span class="text">kevinpak@yandex.ru</span>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <ul class="cpn-tbl-list">
                  <li class="cpn-tbl-list__row">
                    <span class="label">Pays:</span>
                    <span class="text">Benin</span>
                  </li>
                  <li class="cpn-tbl-list__row">
                    <span class="label">Ville:</span>
                    <span class="text">Cotonou</span>
                  </li>
                  <li class="cpn-tbl-list__row">
                    <span class="label">Adresse:</span>
                    <span class="text">Haie-vie</span>
                  </li>
                </ul>
              </td>
              <td>16</td>
              <td>
                <div class="cpn-table__actions-btns">
                  <button class="cpn-btn-switch js-btn-switch" title="Control statut"></button>
                  <button class="cpn-table__actions-item" title="Voir plus" data-bs-toggle="modal" data-bs-target="#newCharacteristic"><i class="icon-eye-open"></i></button>
                  <button class="cpn-table__actions-item" title="Modifier les informations" data-bs-toggle="modal" data-bs-target="#newCharacteristic"><i class="icon-edit"></i></button>
                  <button class="cpn-table__actions-item" title="Modifier le mot de passe" data-bs-toggle="modal" data-bs-target="#newCharacteristic"><i class="icon-password"></i></button>
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