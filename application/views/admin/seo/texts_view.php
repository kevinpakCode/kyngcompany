<div class="pg-texts">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/seo';?>" class="cpn-crumbs__list-item-link">Seo</a></li>
      <li class="cpn-crumbs__list-item">Seo - Texts</li>
    </ul>
  </div>

  <!-- PageMenu -->
  <?php $this->load->view('admin/seo/seo_menu_view');?>

  <!-- PLAQQUE -->
  <div class="cpn-plaque">

  <!-- ACTIONS PAGES -->
  <div class="cpn-pg-actions">
    <ul class="cpn-pg-actions__list">
      <li class="cpn-pg-actions__list-item">
        <button class="cpn-pg-actions__list-item-btn" data-bs-toggle="modal" data-bs-target="#newText">
          <i class="icon-plus"></i>
          <span class="text">Nouveau text</span>
        </button>
      </li>
    </ul>
  </div>

  <div class="pg-texts__body cpn-card">
    <!-- Search -->
    <div class="cpn-search">
      <div class="cpn-search__content">
        <input type="search" placeholder="Recherche" class="cpn-search__field" name="searchMessage" id="searchMessageField">
      </div>
    </div>

    <!-- TABLES -->
    <div class="cpn-wrap-table cpn-scroll-bar--xy">
      <table class="cpn-table">
        <thead>
          <tr>
            <th class="cpn-table__date">Date</th>
            <th>Id</th>
            <th>Image</th>
            <th>Titre</th>
            <th>Content</th>
            <th class="cpn-table__actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>12-03-2021, 20:18</td>
            <td></td>
            <td></td>
            <td>Home</td>
            <td>
              Lorem ipsum, dolor sit amet consectetur 
            </td>
            <td>
              <div class="cpn-table__actions-btns">
                <button class="cpn-btn-switch js-btn-switch"></button>
                <button class="cpn-table__actions-item"  data-bs-toggle="modal" data-bs-target="#newText"><i class="icon-edit"></i></button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

</div>