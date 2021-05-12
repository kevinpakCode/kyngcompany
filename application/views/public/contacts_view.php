<div class="cpn-pg pg-contacts">
  <!-- PAGE HEAD -->
  <div class="cpn-pg__head">
    <div class="cpn-container">
      <!-- CRUMBS -->
      <div class="cpn-crumbs">
        <ul class="cpn-crumbs__list">
          <li class="cpn-crumbs__list-item"><a href="<?=base_url();?>" class="cpn-crumbs__list-item-link">Accueil</a></li>
          <li class="cpn-crumbs__list-item">Contacts</li>
        </ul>
      </div>

      <!-- PAGE TITLE -->
      <h1 class="cpn-h1 pg-contacts__title">Contacts</h1>
    </div>
  </div>


  <!-- PAGE Body -->
  <div class="cpn-pg__body">
    <section class="cpn-pg__section pg-contacts__section">
      <div class="cpn-container">
        <div class="pg-contacts__section-head">
          <div class=".pg-contacts__section-head-elem pg-contacts__section-head-left">
            <div class="pg-contacts__section-head-row">
              <i class="icon-phone"></i> <a href="tel:+22968-95-47-13" class="pg-contacts__section-head-row-link">+22968-95-47-13</a>
            </div>
            <div class="pg-contacts__section-head-row">
              <i class="icon-email-closed"></i> <a href="mailto:admin@kyngcompany.com" class="pg-contacts__section-head-row-link">admin@kyngcompany.com</a>
            </div>
            <div class="pg-contacts__section-head-row">
              <i class="icon-location"></i> <a href="#" class="pg-contacts__section-head-row-link">Russie Moscou</a>
            </div>
          </div>
          <div class=".pg-contacts__section-head-elem pg-contacts__section-head-right"></div>
        </div>
        <div class="pg-contacts__section-body">
          <h2 class="cpn-pg__section-title pg-contacts__section-title">Pour plus d'informations ou inquiétudes, veillez nous laisser un message</h2>
          <form action="contacts" method="post" class="pg-contacts-form" id="formPublicMessage">
            <div class="cpn-form-row">
              <label for="userName" class="cpn-form-row__label">Votre nom <span class="cpn-form-row__label-required">*</span></label>
              <input type="text" name="user_name" class="cpn-field" id="userName" required>
            </div>
            <div class="cpn-x">
              <div class="cpn-form-row cpn-x__2elem">
                <label for="userEmail" class="cpn-form-row__label">Email <span class="cpn-form-row__label-required">*</span></label>
                <input type="email" name="user_email" class="cpn-field" id="userEmail" required>
              </div>
              <div class="cpn-form-row cpn-x__2elem">
                <label for="userPhone" class="cpn-form-row__label">Téléphone <span class="cpn-form-row__label-required">*</span></label>
                <input type="text" name="user_phone" class="cpn-field" id="userPhone" required>
              </div>
            </div>
            <div class="cpn-form-row">
              <label for="userObject" class="cpn-form-row__label">Objet <span class="cpn-form-row__label-required">*</span></label>
              <input type="text" name="user_object" class="cpn-field" id="userObject" required>
            </div>
            <div class="cpn-form-row">
              <label for="userMessage" class="cpn-form-row__label">Message<span class="cpn-form-row__label-required">*</span></label>
              <textarea name="user_message" class="cpn-field" id="userMessage" required></textarea>
            </div>
            <div class="cpn-form-row-footer">
              <button class="cpn-btn pg-contacts-form-btn" name="formPublicMessageBtn" data-text="Envoyer">Envoyer</button>
            </div>
            
          </form>
        </div>
        
        
      </div>
    </section>
  </div>

  <!-- LAST ARTICLES -->
  <?php  $this->load->view('public/widgets/last-articles_view');?>
  
</div>