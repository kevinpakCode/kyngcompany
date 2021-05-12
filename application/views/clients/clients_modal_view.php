<!-- Restor password -->
<div class="modal fade cpn-modal"  id="restorPassword">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-edit"></i>
          <span class="cpn-modal__title-text">Réinitialisation de mot de passe</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formRestorPassword" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="currentEmail" class="cpn-form-row__label">Email <span class="cpn-form-row__label-required">*</span></label>
            <input type="email" name="email"  class="cpn-field" id="currentEmail" required>
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