<div class="pg-client-login">
  <div class="pg-client-login__head">
    <a href="<?=base_url();?>" class="pg-client-login__logo">
      <img src="<?=base_url().'/assets/images/upload/logo_kevinpackcode.svg';?>" alt="logo">
    </a>
    <span class="pg-client-login__head-register">Vous avez déjà un <a href="<?=base_url().'clients';?>" class="link-mark">compte</a>?</span>
  </div>
  <div class="pg-client-login__body">
    <div class="pg-client-login__condition">
      <ol class="pg-client-login__condition-list">
        <li class="pg-client-login__condition-list-item">
          <h2 class="title">Mes identifiants</h2>
          <p class="text">
            Votre identifiant et votre email seront utilisés pour vous connecter à votre compte <mark>Kyng Company</mark>.
          </p>
        </li>
        <li class="pg-client-login__condition-list-item">
          <h2 class="title">Mes informations</h2>
          <p class="text">
          Les informations seront utilisées pour la création de votre compte.
          </p>
        </li>
      </ol>
    </div>
    <div class="pg-client-login__body-login">
      <h1 class="pg-client-login__title">Inscription</h1>
      <ul class="pg-client-login__rs">
        <li class="pg-client-login__rs-item facebook">
          <a href="#" class="pg-client-login__rs-item-link">
            <i class=""></i>
            <span class="text">Avec Facebook</span>
          </a>
        </li>
        <li class="pg-client-login__rs-item google">
          <a href="#" class="pg-client-login__rs-item-link">
            <i class=""></i>
            <span class="text">Avec Google</span>
          </a>
        </li>
      </ul>
      <span class="pg-client-login__separator"><span class="text">ou</span></span>
      <form action="post" class="pg-client-login__form">
        <div class="cpn-x">
          <div class="cpn-form-row cpn-x__2elem">
            <label for="clientLastName" class="cpn-form-row__label">Nom <span class="cpn-form-row__label-required">*</span></label>
            <input type="email" name="lastName" class="cpn-field" id="clientLastName" required>
          </div>
          <div class="cpn-form-row cpn-x__2elem">
            <label for="clientFirstName" class="cpn-form-row__label">Prénoms <span class="cpn-form-row__label-required">*</span></label>
            <input type="email" name="firstName" class="cpn-field" id="clientFirstName" required>
          </div>
        </div>
        
        <div class="cpn-x">
          <div class="cpn-form-row cpn-x__2elem">
            <label for="clientEmail" class="cpn-form-row__label">Email <span class="cpn-form-row__label-required">*</span></label>
            <input type="email" name="email" class="cpn-field" id="clientEmail" required>
          </div>
          <div class="cpn-form-row cpn-x__2elem">
            <label for="clientPhone" class="cpn-form-row__label">Téléphone <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="phone" class="cpn-field" id="clientPhone" required>
          </div>
        </div>

        <div class="cpn-x">
          <div class="cpn-form-row cpn-x__2elem">
            <label for="clientPassword" class="cpn-form-row__label">Mot de passe <span class="cpn-form-row__label-required">*</span></label>
            <input type="password" name="password" class="cpn-field" id="clientPassword" required>
          </div>
          <div class="cpn-form-row cpn-x__2elem">
            <label for="clientRepetPassword" class="cpn-form-row__label">Répéter le mot de passe <span class="cpn-form-row__label-required">*</span></label>
            <input type="password" name="repetPassword" class="cpn-field" id="clientRepetPassword" required>
          </div>
        </div>
        
        <div class="cpn-form-row">
          <input type="checkbox" name="rememberMe" class="cpn-field" id="loginRememberMe" required>
          <label for="loginRememberMe" class="cpn-form-row__label">J'accepte les <a href="<?=base_url();?>" class="cpn-form-row__label-link">conditions d'utilisation</a></label>
        </div>
        <div class="cpn-form-row-footer">
          <button class="cpn-btn" name="loginBtnSubmit">Se connecter</button>
        </div>
      </form>
      <div class="pg-client-login__bottom">
        <a href="<?=base_url().'clients';?>" class="pg-client-login__bottom-link">J'ai déjà un compte!</a>
      </div>
    </div>
  </div>
</div>