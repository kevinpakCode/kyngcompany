<!-- Change Status Order -->
<div class="modal fade cpn-modal"  id="changeStatusOrder">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-plus"></i>
          <span class="cpn-modal__title-text">Changement de statut</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formChangeStatusOrder" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="productImage" class="cpn-form-row__label">Statut <span class="cpn-form-row__label-required">*</span></label>
            <select name="" id="" class="cpn-field" required>
              <option value=""></option>
              <option value="2" name="2">En attente</option>
              <option value="3" name="3">Encours de traitement</option>
              <option value="4" name="4">Encours de livraison</option>
              <option value="5" name="5">Livrer</option>
            </select>
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