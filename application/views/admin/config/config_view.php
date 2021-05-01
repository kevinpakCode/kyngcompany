<div class="pg-config">
   <!-- CRUMBS -->
   <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item">Config - Mes Abonnements</li>
    </ul>
  </div>
  <!-- PageMenu -->
  <?php $this->load->view('admin/config/config_menu_view');?>

  <!-- PLAQQUE -->
  <div class="cpn-plaque">

    <div class="pg-config__body cpn-card">

      <!-- TABLES -->
      <div class="cpn-wrap-table cpn-scroll-bar--xy">
        <table class="cpn-table">
          <thead>
            <tr>
              <th class="cpn-table__name">Type d'abonnement</th>
              <th class="cpn-table__date">Activé le:</th>
              <th class="cpn-table__date">Expire Le:</th>
              <th class="cpn-table__actions">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="pg-config__type-subscription"><strong>Compte premium</strong></div>
                <span class="cpn-status cpn-status--green">Actif</span>
              </td>
              <td>-</td>
              <td>-</td>
              <td>
                <div class="cpn-table__actions-btns">
                  <button class="cpn-btn">Renouveler</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>