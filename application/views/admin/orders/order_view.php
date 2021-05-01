<div class="pg-order">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/orders';?>" class="cpn-crumbs__list-item-link">Les commandes</a></li>
      <li class="cpn-crumbs__list-item">Détail commande</li>
    </ul>
  </div>

  <!-- PageMenu -->
  <div class="cpn-plaque">
    <div class="cpn-plaque__inner">
      <div class="pg-order__user cpn-card">
        <div class="pg-order__user-avatar">
          <img src="<?=base_url()."/assets/images/svg/avatar-02.svg"?>" alt="client avatar">
        </div>
        <div class="pg-order__user-infos">
          <div class="pg-order__user-infos-row">
            <span class="label"><i class="icon-user"></i></span>
            <span class="text">Kevin Kombetto</span>
          </div>
          <div class="pg-order__user-infos-row">
            <span class="label"><i class="icon-phone"></i></span>
            <span class="text">+229 95959595</span>
          </div>
          <div class="pg-order__user-infos-row">
            <span class="label"><i class="icon-email-closed"></i></span>
            <span class="text">email@gmail.com</span>
          </div>
          <div class="pg-order__user-infos-row">
            <span class="label"><i class="icon-home-02"></i></span>
            <span class="text">Bénin, Cocotonou, Fifadji</span>
          </div>
        </div>
      </div>

      <div class="pg-order__order-products cpn-card">
        <!-- TABLES -->
    <div class="cpn-wrap-table cpn-scroll-bar--xy">
      <table class="cpn-table cpn-table--top">
        <thead>
          <tr>
            <th class="cpn-table__num">#</th>
            <th class="cpn-table__name">Produits</th>
            <th>Prix U.</th>
            <th>Quantité</th>
            <th>Prix total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Iphone 11 Max-Pro</td>
            <td>800 000f</td>
            <td>02</td>
            <td>16 000 000f</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Iphone 11 Max-Pro</td>
            <td>800 000f</td>
            <td>02</td>
            <td>16 000 000f</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Iphone 11 Max-Pro</td>
            <td>800 000f</td>
            <td>02</td>
            <td>16 000 000f</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Iphone 11 Max-Pro</td>
            <td>800 000f</td>
            <td>02</td>
            <td>16 000 000f</td>
          </tr>
          <tr class="cpn-table__total">
            <td colspan="4" class="cpn-table__total-label">Total</td>
            <td class="cpn-table__total-value">16 000 000f</td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>
    </div>
  </div>

</div>