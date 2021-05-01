<!-- New Category -->
<div class="modal fade cpn-modal"  id="newCategory">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-plus"></i>
          <span class="cpn-modal__title-text">Nouvelle catégorie</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formNewCategory" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="categorieImage" class="cpn-form-row__label">Image</label>
            <input type="file" name="file" class="cpn-field js-dropify" id="categorieImage" accept=".jpg, .jpeg, .png">
          </div>
          <div class="cpn-form-row">
            <label for="categorieName" class="cpn-form-row__label">Nom <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="name" class="cpn-field" id="categorieName" required>
          </div>
          <div class="cpn-form-row">
            <label for="categorieDescription" class="cpn-form-row__label">Observation</label>
            <textarea name="description" class="cpn-field" id="categorieDescription"></textarea>
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


<!-- New News -->
<div class="modal fade cpn-modal"  id="newNews">
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
        <form action="marketing/client" method="Post" id="formNewNews" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="newsImage" class="cpn-form-row__label">Image  <span class="cpn-form-row__label-required">*</span></label>
            <input type="file" name="file" class="cpn-field js-dropify" id="newsImage" accept=".jpg, .jpeg, .png" require>
          </div>
          <div class="cpn-form-row">
            <label for="idNewsCategorie" class="cpn-form-row__label">caratégorie <span class="cpn-form-row__label-required">*</span></label>
            <select name="idNewsCategorie" class="cpn-field" id="idNewsCategorie" required></select>
          </div>
          <div class="cpn-form-row">
            <label for="newsName" class="cpn-form-row__label">Nom <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="name" class="cpn-field" id="newsName" required>
          </div>
          <div class="cpn-form-row">
            <label for="newsDescription" class="cpn-form-row__label">Description <span class="cpn-form-row__label-required">*</span></label>
            <textarea name="description" class="cpn-field" id="newsDescription" require></textarea>
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

<!-- New Images -->
<div class="modal fade cpn-modal"  id="newImages">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-plus"></i>
          <span class="cpn-modal__title-text">Nouvelles images</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formNewImages" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="newsImage" class="cpn-form-row__label">Image <span class="cpn-form-row__label-required">*</span></label>
            <input type="file" name="file" class="cpn-field js-dropify" id="newsImage" accept=".jpg, .jpeg, .png" multiple required>
          </div>

          <div class="cpn-form-row">
            <label for="newsDescription" class="cpn-form-row__label">Description</label>
            <textarea name="description" class="cpn-field" id="newsDescription"></textarea>
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