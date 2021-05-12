<!-- PageMenu -->
<ul class="cpn-pg-menu">
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/config'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="")? 'active':'';?>"><span class="text">Mes Abonnements</span></a>
  </li>
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/config/profile'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="profile")? 'active':'';?>"><span class="text">Mon profile</span></a>
  </li>
</ul>