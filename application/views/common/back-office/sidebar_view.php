<?php
  //$grpId = $user->grpId;
  //$filiales = $this->Global_model->get_rows('filiales', array('id_societe'=>$grpId, 'status'=>2));
?>
<aside class="sidebar">
  <div class="sidebar__inner">
    <div class="sidebar__header">
      <div class="sidebar__logo">
        <a href="<?= base_url();?>" class="sidebar__logo-link">
          <img src="<?= base_url().'/assets/images/init/logo.png';?>" alt="logo">
        </a>
      </div>
    </div>
    <nav class="sidebar__nav cpn-scroll-bar--y">
      <?php $currentModule?$this->load->view($currentModule.'/sidebar_view'):null; ?>
    </nav>
    <div class="sidebar__footer">
      <div class="sidebar__footer-text">Réalisé par <a href="#" class="webmaster">KevinpakCode</a></div>
      <a href="#" class="webmaster-logo">
        <img src="<?=base_url().'/assets/images/upload/logo_kevinpackcode.svg'?>"alt="logo KevinpakCode">
      </a>
    </div>
  </div>
  <button class="sidebar__btn js-control-app-mode"></button>
</aside>