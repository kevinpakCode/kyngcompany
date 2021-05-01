<div class="pg-actions-log">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item">Historique des connexions</li>
    </ul>
  </div>

  <!-- PageMenu -->
  <?php $this->load->view('admin/system-log/system-log_menu_view');?>

  <!-- PLAQQUE -->
  <div class="cpn-plaque">

    <div class="pg-actions-log__body cpn-card">
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
              <th class="cpn-table__name">User</th>
              <th class="cpn-table__date">Table</th>
              <th class="cpn-table__date">column</th>
              <th class="cpn-table__date">Action</th>
              <th class="cpn-table__date">initial</th>
              <th class="cpn-table__date">Final</th>
              <th class="cpn-table__date">Grp Action</th>
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
                    </div>
                  </div>
                </div>
              </td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
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
                    </div>
                  </div>
                </div>
              </td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>

  </div>

</div>