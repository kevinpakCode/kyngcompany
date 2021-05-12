<div class="pg-news">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item">Les Actualités</li>
    </ul>
  </div>

  <!-- PageMenu -->
  <?php $this->load->view('admin/news/news_menu_view');?>

  <!-- ACTIONS PAGES -->
  <div class="cpn-pg-actions">
    <ul class="cpn-pg-actions__list">
      <li class="cpn-pg-actions__list-item">
        <button class="cpn-pg-actions__list-item-btn" data-bs-toggle="modal" data-bs-target="#newNews">
          <i class="icon-plus"></i>
          <span class="text">Novelle Actualité</span>
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
            <th class="cpn-table__name">Image</th>
            <th class="cpn-table__name">Titre</th>
            <th>Description</th>
            <th class="cpn-table__name">Interactions</th>
            <th class="cpn-table__actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>22-05-2021, 18:00:00</td>
            <td>
              <div class="cpn-tbl-item">
                <div class="cpn-tbl-item__inner">
                  <div class="cpn-tbl-item__img">
                    <img src="<?=base_url().'/assets/images/svg/default-img.svg'?>" alt="image catégorie news">
                  </div>
                </div>
              </div>
            </td>
            <td>Voice Africa 2021</td>
            <td>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur reprehenderit 
              quae ducimus possimus odit excepturi cum ipsum, dignissimos quas animi expedita ex 
              harum voluptates quisquam earum, in praesentium? Fuga, cum.
            </td>
            <td>
              <ul class="cpn-tbl-list">
                <li class="cpn-tbl-list__row">
                  <span class="label">Commentaires</span>
                  <button class="cpn-btn-switch js-btn-switch"></button>
                </li>
                <li class="cpn-tbl-list__row">
                  <span class="label">J'aime</span>
                  <button class="cpn-btn-switch js-btn-switch"></button>
                </li>
                <li class="cpn-tbl-list__row">
                  <span class="label">Partages</span>
                  <button class="cpn-btn-switch js-btn-switch"></button>
                </li>
              </ul>
            </td>
            <td class="cpn-table__actions cpn-table__actions--right">
              <div class="cpn-table__actions-btns">
                <button class="cpn-btn-switch js-btn-switch"></button>
                <a href="<?=base_url().'/admin/news/5'?>"  class="cpn-table__actions-item" title="Voir plus"><i class="icon-eye-open"></i></a>
                <button class="cpn-table__actions-item" title="Modifier les informations" data-bs-toggle="modal" data-bs-target="#newNews"><i class="icon-edit"></i></button>
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