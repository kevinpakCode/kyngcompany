<!-- Edite Text -->
<div class="modal fade cpn-modal"  id="editText">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-edit"></i>
          <span class="cpn-modal__title-text">Modifier</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formEditText" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="lastText" class="cpn-form-row__label">Valeur <span class="cpn-form-row__label-required">*</span></label>
            <textarea name="idText" class="cpn-field" id="lastText" required></textarea>
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


<!-- New seo page -->
<div class="modal fade cpn-modal"  id="newSeoPage">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-plus"></i>
          <span class="cpn-modal__title-text">Nouvelle Actualité</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formNewSeoPage" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="SeoPageImage" class="cpn-form-row__label">Image </label>
            <input type="file" name="file" class="cpn-field js-dropify" id="SeoPageImage" accept=".jpg, .jpeg, .png">
          </div>
          <div class="cpn-form-row">
            <label for="idSeoPageName" class="cpn-form-row__label">Page<span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="pageName" class="cpn-field" id="idSeoPageName" required>
          </div>
          <div class="cpn-form-row">
            <label for="SeoPageTitle" class="cpn-form-row__label">Title <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="pageTitle" class="cpn-field" id="SeoPageTitle" required>
          </div>
          <div class="cpn-form-row">
            <label for="SeoPageLink" class="cpn-form-row__label">Link <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="pageLink" class="cpn-field" id="SeoPageLink" required>
          </div>
          <div class="cpn-form-row">
            <label for="SeoPageKeyworks" class="cpn-form-row__label">KeyWorks<span class="cpn-form-row__label-required">*</span></label>
            <textarea name="keyworks" class="cpn-field" id="SeoPageKeyworks" require></textarea>
          </div>
          <div class="cpn-form-row">
            <label for="SeoPageDescription" class="cpn-form-row__label">Description <span class="cpn-form-row__label-required">*</span></label>
            <textarea name="description" class="cpn-field" id="SeoPageDescription" require></textarea>
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


<!-- New Text -->
<div class="modal fade cpn-modal"  id="newText">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-plus"></i>
          <span class="cpn-modal__title-text">Nouveau Text</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formNewText" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="TextImage" class="cpn-form-row__label">Image  <span class="cpn-form-row__label-required">*</span></label>
            <input type="file" name="file" class="cpn-field js-dropify" id="TextImage" accept=".jpg, .jpeg, .png" require>
          </div>
          <div class="cpn-form-row">
            <label for="TextTitle" class="cpn-form-row__label">Title <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="title" class="cpn-field" id="TextTitle" required>
          </div>
          <div class="cpn-form-row">
            <label for="TextDescription" class="cpn-form-row__label">Content <span class="cpn-form-row__label-required">*</span></label>
            <textarea name="textContent" class="cpn-field" id="TextContent" require></textarea>
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