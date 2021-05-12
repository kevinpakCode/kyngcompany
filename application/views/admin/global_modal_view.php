<!-- GLOBAL CHANGE STATUS -->
<div class="modal fade cpn-modal cpn-modal-status"  id="changeStatus">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title cpn-modal-status__title">
          <i class="js-modal-icon"></i>
          <span class="cpn-modal__title-text cpn-modal-status__title-text js-modal-title">Êtes-vous sûr de vouloir continuer ?</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="admin/admin/ajax" method="Post" id="formChangeStatus" novalidate="novalidate">
          <input type="hidden" name="data" required>
          <div class="cpn-modal-status__message js-modal-message"></div>
          <div class="cpn-form-row-footer">
            <button class="cpn-btn cpn-btn--red" data-bs-dismiss="modal">Non</button>
            <button class="cpn-btn" name="formChangeStatusBtn">Oui</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>