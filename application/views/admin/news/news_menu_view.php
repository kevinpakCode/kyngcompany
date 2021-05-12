<!-- PageMenu -->
<ul class="cpn-pg-menu">
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/news/categories'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="categories")? 'active':'';?>"><span class="text">Les Catégories</span></a>
  </li>
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/news'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="")? 'active':'';?>"><span class="text">Les Actualités</span></a>
  </li>
</ul>