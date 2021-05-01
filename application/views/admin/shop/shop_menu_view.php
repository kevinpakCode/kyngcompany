<!-- PageMenu -->
<ul class="cpn-pg-menu">
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/shop/categories'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="categories")? 'active':'';?>"><span class="text">Catégories</span></a>
  </li>
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/shop/brands'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="brands")? 'active':'';?>"><span class="text">Marques</span></a>
  </li>
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/shop/characteristics'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="characteristics")? 'active':'';?>"><span class="text">Caractéristiques</span></a>
  </li>
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/shop/products'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="products")? 'active':'';?>"><span class="text">Produits</span></a>
  </li>
</ul>