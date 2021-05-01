<div class="pg-seo">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item">Seo - Dedault data</li>
    </ul>
  </div>

  <!-- PageMenu -->
  <?php $this->load->view('admin/seo/seo_menu_view');?>

  <!-- PLAQQUE -->
  <div class="cpn-plaque">
    <div class="pg-seo__body cpn-card">
      <!-- TABLES -->
      <div class="cpn-wrap-table cpn-scroll-bar--xy">
        <table class="cpn-table">
          <thead>
            <tr>
              <th class="cpn-table__name">Nom</th>
              <th>Valeur</th>
              <th class="cpn-table__actions">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Site Name</td>
              <td>
                Lorem ipsum, dolor sit amet consectetur 
              </td>
              <td>
                <div class="cpn-table__actions-btns">
                  <button class="cpn-btn-switch js-btn-switch"></button>
                  <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#editText"><i class="icon-edit"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>Site Url</td>
              <td>
                Lorem ipsum, dolor sit amet consectetur 
              </td>
              <td>
                <div class="cpn-table__actions-btns">
                  <button class="cpn-btn-switch js-btn-switch"></button>
                  <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#editText"><i class="icon-edit"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>author</td>
              <td>
                Lorem ipsum, dolor sit amet consectetur 
              </td>
              <td>
                <div class="cpn-table__actions-btns">
                  <button class="cpn-btn-switch js-btn-switch"></button>
                  <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#editText"><i class="icon-edit"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>keywords</td>
              <td>
                Lorem ipsum, dolor sit amet consectetur 
              </td>
              <td>
                <div class="cpn-table__actions-btns">
                  <button class="cpn-btn-switch js-btn-switch"></button>
                  <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#editText"><i class="icon-edit"></i></button>
                </div>
              </td>
            </tr>
            <tr>
              <td>Description</td>
              <td>
                Lorem ipsum, dolor sit amet consectetur 
              </td>
              <td>
                <div class="cpn-table__actions-btns">
                  <button class="cpn-btn-switch js-btn-switch"></button>
                  <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#editText"><i class="icon-edit"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>