<!-- New Widget -->
<div class="modal fade cpn-modal"  id="newWidget">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-plus"></i>
          <span class="cpn-modal__title-text">Nouveau Widget</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formNewWidget" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="WidgetImage" class="cpn-form-row__label">Image  <span class="cpn-form-row__label-required">*</span></label>
            <input type="file" name="file" class="cpn-field js-dropify" id="WidgetImage" accept=".jpg, .jpeg, .png" require>
          </div>
          <div class="cpn-form-row">
            <label for="WidgetName" class="cpn-form-row__label">Nom <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="name" class="cpn-field" id="WidgetName" required>
          </div>
          <div class="cpn-form-row">
            <label for="WidgetDescription" class="cpn-form-row__label">Description <span class="cpn-form-row__label-required">*</span></label>
            <textarea name="description" class="cpn-field" id="WidgetDescription" require></textarea>
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


<!-- New Widget Elem -->
<div class="modal fade cpn-modal"  id="newWidgetElem">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-plus"></i>
          <span class="cpn-modal__title-text">Nouveau élément Widget</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formNewWidgetElem" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="WidgetElemImage" class="cpn-form-row__label">Image</label>
            <input type="file" name="file" class="cpn-field js-dropify" id="WidgetElemImage" accept=".jpg, .jpeg, .png">
          </div>
          <div class="cpn-form-row">
            <label for="idWidget" class="cpn-form-row__label">Widget <span class="cpn-form-row__label-required">*</span></label>
            <select name="idWidget" class="cpn-field" id="idWidget" disabled required></select>
          </div>
          <div class="cpn-form-row">
            <label for="WidgetElemName" class="cpn-form-row__label">Nom de l'élémént<span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="name" class="cpn-field" id="WidgetElemName" required>
          </div>
          <div class="cpn-form-row">
            <label for="WidgetElemLink" class="cpn-form-row__label">Le lien</label>
            <input type="text" name="link" class="cpn-field" id="WidgetElemLink">
          </div>
          <div class="cpn-form-row">
            <label for="WidgetElemIcon" class="cpn-form-row__label">Icon</label>
            <input type="text" name="icon" class="cpn-field" id="WidgetElemIcon">
          </div>
          <div class="cpn-form-row">
            <label for="WidgetElemDescription" class="cpn-form-row__label">Description <span class="cpn-form-row__label-required">*</span></label>
            <textarea name="description" class="cpn-field" id="WidgetElemDescription" require></textarea>
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