<!-- PageMenu -->
<ul class="cpn-pg-menu">
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/system_log'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="")? 'active':'';?>"><span class="text">Historique de connexion</span></a>
  </li>
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/system_log/actions'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="actions")? 'active':'';?>"><span class="text">Historique des actions</span></a>
  </li>
</ul>