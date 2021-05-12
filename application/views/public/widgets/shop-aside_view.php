<ul class="cpn-pg__aside-list">
  <li class="cpn-pg__aside-list-item">
    <a href="<?=base_url().'shop';?>" class="cpn-pg__aside-list-item-link  <?=(getSegment(1)=="shop"&&getSegment(2)=="")? 'cpn-pg__aside-list-item-link--active':'';?>">Toutes les marques</a>
  </li>
  <li class="cpn-pg__aside-list-item">
    <a href="<?=base_url().'shop/222';?>" class="cpn-pg__aside-list-item-link <?=(getSegment(1)=="shop"&&getSegment(2)==222)? 'cpn-pg__aside-list-item-link--active':'';?>">Politique</a>
  </li>
  <li class="cpn-pg__aside-list-item">
    <a href="<?=base_url().'shop/223';?>" class="cpn-pg__aside-list-item-link <?=(getSegment(1)=="shop"&&getSegment(2)==223)? 'cpn-pg__aside-list-item-link--active':'';?>">Sport</a>
  </li>
  <li class="cpn-pg__aside-list-item">
    <a href="<?=base_url().'shop/224';?>" class="cpn-pg__aside-list-item-link <?=(getSegment(1)=="shop"&&getSegment(2)==224)? 'cpn-pg__aside-list-item-link--active':'';?>">Business</a>
  </li>
</ul>