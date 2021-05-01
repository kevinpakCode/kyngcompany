<!-- New Categories -->
<div class="modal fade cpn-modal" id="newCategories"  aria-labelledby="exampleModalCenterTitle">
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
        <form action="marketing/client" method="Post" id="newClient" novalidate="novalidate">
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


<!-- New Brand -->
<div class="modal fade cpn-modal" id="newBrand"  aria-labelledby="exampleModalCenterTitle">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-plus"></i>
          <span class="cpn-modal__title-text">Nouvelle marque</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="newClient" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="brandName" class="cpn-form-row__label">Nom <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="name" class="cpn-field" id="brandName" required>
          </div>

          <div class="cpn-form-row">
            <label for="brandDescription" class="cpn-form-row__label">Observation</label>
            <textarea name="description" class="cpn-field" id="brandDescription"></textarea>
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



<!-- New Product -->
<div class="modal fade cpn-modal" id="newProduct" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-plus"></i>
          <span class="cpn-modal__title-text">Nouveau produit</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="newClient" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="productImage" class="cpn-form-row__label">Image <span class="cpn-form-row__label-required">*</span></label>
            <input type="file" name="file" class="cpn-field js-dropify" id="productImage" accept=".jpg, .jpeg, .png" required>
          </div>

          <div class="cpn-form-row">
            <label for="productName" class="cpn-form-row__label">Nom <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="name" class="cpn-field" id="productName" required>
          </div>

          <div class="cpn-x">
            <div class="cpn-form-row cpn-x__2elem">
              <label for="productCategory" class="cpn-form-row__label">Catégorie<span class="cpn-form-row__label-required">*</span></label>
              <select type="text" name="idCategory" class="cpn-field" id="productCategory" required></select>
            </div>
            <div class="cpn-form-row cpn-x__2elem">
              <label for="productModel" class="cpn-form-row__label">Model<span class="cpn-form-row__label-required">*</span></label>
              <select name="idBrand" class="cpn-field" id="productModel" required></select>
            </div>
          </div>

          <div class="cpn-x">
            <div class="cpn-form-row cpn-x__2elem">
              <label for="productByePrice" class="cpn-form-row__label">Prix d'Achat<span class="cpn-form-row__label-required">*</span></label>
              <input type="text"  name="byePrice" class="cpn-field" id="productByePrice" required>
            </div>
            <div class="cpn-form-row cpn-x__2elem">
              <label for="productSalePrice" class="cpn-form-row__label">Prix de vente<span class="cpn-form-row__label-required">*</span></label>
              <input type="text"  name="salePrice" class="cpn-field" id="productSalePrice" required>
            </div>
          </div>

          <div class="cpn-form-row">
            <label for="productDescription" class="cpn-form-row__label">Observation</label>
            <textarea name="description" class="cpn-field" id="productDescription"></textarea>
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


<!-- New Characteristic -->
<div class="modal fade cpn-modal"  id="newCharacteristic">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-plus"></i>
          <span class="cpn-modal__title-text">Nouveau caratéristique</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="newClient" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="charateristicName" class="cpn-form-row__label">caratéristique <span class="cpn-form-row__label-required">*</span></label>
            <select name="idcharateristic" class="cpn-field" id="charateristicName" required></select>
          </div>

          <div class="cpn-form-row">
            <label for="charateristicValue" class="cpn-form-row__label">Valeur</label>
            <select name="idValue" class="cpn-field" id="charateristicValue" required></select>
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
            <label for="productImage" class="cpn-form-row__label">Image <span class="cpn-form-row__label-required">*</span></label>
            <input type="file" name="file" class="cpn-field js-dropify" id="productImage" accept=".jpg, .jpeg, .png" multiple required>
          </div>
          <div class="cpn-form-row">
            <label for="productDescription" class="cpn-form-row__label">Description</label>
            <textarea name="description" class="cpn-field" id="productDescription"></textarea>
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



<!-- Confirmation Delete -->
<div class="modal fade cpn-modal"  id="confirmationDelete">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <i class="icon-alert"></i>
          <span class="cpn-modal__title-text">Êtes vous sûr de vouloir supprimer ?</span>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="marketing/client" method="Post" id="formConfirmationDelete" novalidate="novalidate">
          <div class="cpn-form-row-footer">
            <button class="cpn-btn cpn-btn--red" data-bs-dismiss="modal">Annuler</button>
            <button class="cpn-btn">Oui</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Edit Text -->
<div class="modal fade cpn-modal"  id="editTextElem">
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
        <form action="marketing/client" method="Post" id="formEditTextElem" novalidate="novalidate">
          <div class="cpn-form-row">
            <label for="lastTextElem" class="cpn-form-row__label">Nom <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="idElem" class="cpn-field" id="lastTextElem" required>
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