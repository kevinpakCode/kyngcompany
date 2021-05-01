<ul class="sidebar__nav-list">
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/dashboard';?>" class="sidebar__nav-list-item-link <?=($this->uri->segment(2)=="dashboard")? 'active':'';?>">
      <i class="icon-home"></i>
      <span class="sidebar__nav-list-item-link-text">Dashboard</span>
    </a>
  </li>
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/messages';?>" class="sidebar__nav-list-item-link <?=($this->uri->segment(2)=="messages")? 'active':'';?>">
      <i class="icon-email-closed"></i>
      <span class="sidebar__nav-list-item-link-text">Messages</span>
    </a>
  </li>
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/shop/categories';?>" class="sidebar__nav-list-item-link <?=($this->uri->segment(2)=="shop")? 'active':'';?>">
      <i class="icon-shopping-cart"></i>
      <span class="sidebar__nav-list-item-link-text">Boutique</span>
    </a>
  </li>
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/orders';?>" class="sidebar__nav-list-item-link <?=($this->uri->segment(2)=="orders")? 'active':'';?>">
      <i class="icon-shopping-cart-02"></i>
      <span class="sidebar__nav-list-item-link-text">Commandes</span>
    </a>
  </li>
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/clients';?>" class="sidebar__nav-list-item-link <?=($this->uri->segment(2)=="clients")? 'active':'';?>">
    <i class="icon-users"></i>
      <span class="sidebar__nav-list-item-link-text">Clients</span>
    </a>
  </li>
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/news';?>" class="sidebar__nav-list-item-link <?=($this->uri->segment(2)=="news")? 'active':'';?>">
      <i class="icon-news"></i>
      <span class="sidebar__nav-list-item-link-text">Actualités</span>
    </a>
  </li>
</ul>

<ul class="sidebar__nav-list">
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/widgets';?>" class="sidebar__nav-list-item-link <?=($this->uri->segment(2)=="widgets")? 'active':'';?>">
      <i class="icon-widgets"></i>
      <span class="sidebar__nav-list-item-link-text">Widgets</span>
    </a>
  </li>
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/seo';?>" class="sidebar__nav-list-item-link <?=($this->uri->segment(2)=="seo")? 'active':'';?>">
      <i class="icon-seo"></i>
      <span class="sidebar__nav-list-item-link-text">Seo</span>
    </a>
  </li>
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/config';?>" class="sidebar__nav-list-item-link <?=($this->uri->segment(2)=="config")? 'active':'';?>">
      <i class="icon-settings"></i>
      <span class="sidebar__nav-list-item-link-text">Configuration</span>
    </a>
  </li>
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/dashboard';?>" class="sidebar__nav-list-item-link">
      <i class="icon-user-pass"></i>
      <span class="sidebar__nav-list-item-link-text">Utilisateurs</span>
    </a>
  </li>
  <li class="sidebar__nav-list-item">
    <a href="<?=base_url().'admin/system_log';?>" class="sidebar__nav-list-item-link <?=($this->uri->segment(2)=="system_log")? 'active':'';?>">
      <i class="icon-menu"></i>
      <span class="sidebar__nav-list-item-link-text">Log Système</span>
    </a>
  </li>
</ul>