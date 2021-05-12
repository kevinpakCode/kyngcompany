<div class="pg-profile">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item">Mon Profile</li>
    </ul>
  </div>
  <!-- PageMenu -->
  <?php $this->load->view('admin/config/config_menu_view');?>

  <!-- PLAQQUE -->
  <div class="cpn-plaque">

    <div class="pg-profile__body cpn-card">
      <button class="pg-profile__btn-edit" title="Modifier mon profile"  data-bs-toggle="modal" data-bs-target="#editProfile"><i class="icon-edit"></i></button>
      <div class="pg-profile__avatar">
        <img src="<?=base_url().'/assets/images/svg/avatar-02.svg'?>" alt="user avatar">
      </div>
      <div class="pg-profile__infos">
        <div class="pg-profile__infos-row pg-profile__infos-row--name">
          Kombetto Kevin
        </div>
        <div class="pg-profile__infos-row">
          <span class="label"><i class="icon-phone"></i></span>
          <span class="text">+229 97 75 02 01</span>
        </div>
        <div class="pg-profile__infos-row">
          <span class="label"><i class="icon-email-closed"></i></span>
          <span class="text">kevinpak@yandex.ru</span>
        </div>
        <div class="pg-profile__infos-row">
          <span class="label"><i class="icon-home-02"></i></span>
          <span class="text">Benin, Cototnou - Haie-vive</span>
        </div>
      </div>

      <div class="pg-profile__password">
        <button class="cpn-btn" title="Modifier mon mot de passe"  data-bs-toggle="modal" data-bs-target="#changePassword">Modifier Mot de passe</button>
      </div>
      
    </div>
  </div>

</div>