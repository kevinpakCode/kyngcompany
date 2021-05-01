<?php?>
<header class="header">
  <div class="header__inner">
    <button class="header__menu-btn icon-menu-hamberger js-control-app-mode"></button>
    <div class="header__right">
      <div class="header__alert header__right-item cpn-dropdown">
        <button class="header__alert-btn cpn-dropdown__btn">
          <i class="icon-alert"></i>
          <span class="header__alert-num">0</span>
        </button>
        <ul class="cpn-dropdown__content header__alert-list">
          <li class="header__alert-list-item">
            <a href="#" class="header__alert-list-item-link">
              <i class="icon-email-closed"></i>
              <span class="text">Messages</span>
              <span class="num">0</span>
            </a>
          </li>
          <li class="header__alert-list-item">
            <a href="#" class="header__alert-list-item-link">
              <i class="icon-shopping-cart-02"></i>
              <span class="text">Commandes</span>
              <span class="num">0</span>
            </a>
          </li>
          <li class="header__alert-list-item">
            <a href="#" class="header__alert-list-item-link">
              <i class="icon-error"></i>
              <span class="text">Notifications</span>
              <span class="num">0</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="header__user header__right-item  cpn-dropdown">
        <button class="header__user-btn cpn-dropdown__btn">
          <span class="header__user-avatar">
            <img src="<?=base_url().'/assets/images/svg/avatar.svg'?>" alt="user avatar">
          </span>
        </button>
        <div class="cpn-dropdown__content">
          <div class="cpn-dropdown__content-head">
            <span class="user-name">Kevin Kombetto</span>
          </div>
          <ul class="cpn-dropdown__content-list">
            <li class="cpn-dropdown__content-list-item">
              <a href="<?=base_url();?>" class="cpn-dropdown__content-list-item-link">
                <i class="icon-user"></i>
                <span class="text">Profile</span>
              </a>
            </li>
          </ul>
          <div class="cpn-dropdown__content-footer">
            <a href="<?=base_url();?>" class="logout">
              <i class="icon-exit-right"></i>
              <span class="logout-text">Se déconnecter</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
