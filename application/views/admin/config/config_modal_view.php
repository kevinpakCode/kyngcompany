<!-- Edit Profile -->
<div class="modal fade cpn-modal"  id="editProfile">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-edit"></i>
          <span class="cpn-modal__title-text">Mon Profile</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formEditProfile" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="ProfileImage" class="cpn-form-row__label">Image </label>
            <input type="file" name="file" class="cpn-field js-dropify" id="ProfileImage" accept=".jpg, .jpeg, .png">
          </div>
          <div class="cpn-x">
            <div class="cpn-form-row cpn-x__2elem">
              <label for="profileLastName" class="cpn-form-row__label">Nom <span class="cpn-form-row__label-required">*</span></label>
              <input type="text" name="lastName" class="cpn-field" id="profileLastName" required>
            </div>
            <div class="cpn-form-row cpn-x__2elem">
              <label for="profileFirstName" class="cpn-form-row__label">Prénoms<span class="cpn-form-row__label-required">*</span></label>
              <input type="text" name="firstName" class="cpn-field" id="profileFirstName" required>
            </div>
          </div>
          <div class="cpn-form-row">
            <label for="profileEmail" class="cpn-form-row__label">Email <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="profilEmail" class="cpn-field" id="profileEmail" required>
          </div>
          <div class="cpn-form-row">
            <label for="profilePhone" class="cpn-form-row__label">Téléphone <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="profilePhone" class="cpn-field" id="profilePhone" required>
          </div>
          <div class="cpn-form-row">
            <label for="profileAdress" class="cpn-form-row__label">Adresse<span class="cpn-form-row__label-required">*</span></label>
            <textarea name="profileAdress" class="cpn-field" id="profileAdress" require></textarea>
          </div>

          <div class="cpn-form-row-footer">
            <button class="cpn-btn cpn-btn--red" data-bs-dismiss="modal">Annuler</button>
            <button class="cpn-btn">Sauvegarder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Change Password -->
<div class="modal fade cpn-modal"  id="changePassword">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-edit"></i>
          <span class="cpn-modal__title-text">Modification de mot de passe</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formChangePassword" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="oldPassword" class="cpn-form-row__label">Ancien Mot de passe <span class="cpn-form-row__label-required">*</span></label>
            <input type="password" name="oldPassword" class="cpn-field" id="oldPassword" required>
          </div>
          <div class="cpn-x">
            <div class="cpn-form-row cpn-x__2elem">
              <label for="newPassword" class="cpn-form-row__label">Nouveau mot de passe <span class="cpn-form-row__label-required">*</span></label>
              <input type="password" name="newPassword" class="cpn-field" id="newPassword" required>
            </div>
            <div class="cpn-form-row cpn-x__2elem">
              <label for="repetNewPassword" class="cpn-form-row__label">Répéter Nouveau mot de passe<span class="cpn-form-row__label-required">*</span></label>
              <input type="password" name="repetNewPassword" class="cpn-field" id="repetNewPassword" required>
            </div>
          </div>
         
          <div class="cpn-form-row-footer">
            <button class="cpn-btn cpn-btn--red" data-bs-dismiss="modal">Annuler</button>
            <button class="cpn-btn">Sauvegarder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
