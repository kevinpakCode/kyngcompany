<!-- PageMenu -->
<ul class="cpn-pg-menu">
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/seo'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="")? 'active':'';?>"><span class="text">Defaut</span></a>
  </li>
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/seo/pages'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="pages")? 'active':'';?>"><span class="text">Les Pages</span></a>
  </li>
  <li class="cpn-pg-menu__item">
    <a href="<?=base_url().'admin/seo/texts'?>" class="cpn-pg-menu__item-link <?=($this->uri->segment(3)=="texts")? 'active':'';?>"><span class="text">Les textes</span></a>
  </li>
</ul>