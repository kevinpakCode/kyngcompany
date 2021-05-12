<header class="header">
  <div class="header__top">
    <div class="cpn-container">
      <div class="header__top-inner">
        <a href="<?=base_url();?>" class="header__logo">
          <img src="<?=base_url().'assets/images/upload/logo.svg';?>" alt="logo">
        </a>
        <div class="header__rs">
          <ul class="cpn-rs-list">
            <li class="cpn-rs-list__row">
              <span class="cpn-rs-list__row-title">Politique</span>
              <a href="#" class="cpn-rs-list__item"><i class="cpn-rs-list__item-icon icon-rs-facebook"></i></a>
              <a href="#" class="cpn-rs-list__item"><i class="cpn-rs-list__item-icon icon-rs-twitter"></i></a>
              <a href="#" class="cpn-rs-list__item"><i class="cpn-rs-list__item-icon icon-rs-instagram"></i></a>
              <a href="#" class="cpn-rs-list__item"><i class="cpn-rs-list__item-icon icon-rs-vk"></i></a>
            </li>
            <li class="cpn-rs-list__row">
              <span class="cpn-rs-list__row-title">Sport</span>
              <a href="#" class="cpn-rs-list__item"><i class="cpn-rs-list__item-icon icon-rs-twitter"></i></a>
              <a href="#" class="cpn-rs-list__item"><i class="cpn-rs-list__item-icon icon-rs-vk"></i></a>
            </li>
            <li class="cpn-rs-list__row">
              <span class="cpn-rs-list__row-title">Business</span>
              <a href="#" class="cpn-rs-list__item"><i class="cpn-rs-list__item-icon icon-rs-facebook"></i></a>
              <a href="#" class="cpn-rs-list__item"><i class="cpn-rs-list__item-icon icon-rs-twitter"></i></a>
            </li>
          </ul>
        </div>
        <a href="<?=base_url().'shop/card';?>" class="header__cart">
          <i class="icon-shopping-cart header__cart-icon"></i>
          <span class="header__cart-num">0</span>
        </a>
        <a href="<?=base_url().'clients';?>" class="header__login">
          <i class="icon-user header__login-icon"></i>
          <span class="header__login-text">Se connecter</span>
        </a>
      </div>
    </div>
  </div>
  <div class="header__bottom">
    <div class="cpn-container">
      <div class="header__bottom-inner">
        <button class="header__menu-btn js-mobil-menu"><i class="icon-menu-hamberger header__menu-btn-icon"></i></button>
        <div class="header__menu-wrap">
          <button class="header__menu-btn-close js-mobil-menu"><i class="icon-close header__menu-btn-icon-close"></i></button>
          <ul class="header__menu">
            <li class="header__menu-item"><a href="<?=base_url();?>" class="header__menu-link <?=($this->uri->segment(1)=="")? 'header__menu-link--active':'';?>">Accueil</a></li>
            <li class="header__menu-item"><a href="<?=base_url().'news';?>" class="header__menu-link <?=($this->uri->segment(1)=="news")? 'header__menu-link--active':'';?>">Actualités</a></li>
            <li class="header__menu-item"><a href="<?=base_url().'shop';?>" class="header__menu-link <?=($this->uri->segment(1)=="shop")? 'header__menu-link--active':'';?>">Boutique</a></li>
            <li class="header__menu-item"><a href="<?=base_url().'contacts';?>" class="header__menu-link <?=($this->uri->segment(1)=="contacts")? 'header__menu-link--active':'';?>">Contacts</a></li>
          </ul>
        </div>
        
        <div class="header__search">
          <label class="header__search-label cpn-search-label">
            <input type="search" class="header__search-field cpn-search-field">
          </label>
        </div>
      </div>
    </div>
  </div>
</header>