<!-- New Categories -->
<div class="modal fade cpn-modal" id="newCategories" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <div class="cpn-modal__title-inner">
            <div class="cpn-modal__title--create"><i class="icon-plus-02"></i><span class="cpn-modal__title-text">Nouvelle catégorie</span></div>
            <div class="cpn-modal__title--edit"><i class="icon-edit"></i><span class="cpn-modal__title-text">Modifier catégorie</span></div>
          </div>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="admin/shop/categories" method="post" id="formNewCategory" data-mode="create">
          <input type="hidden" name="tbl">
          <input type="hidden" name="id">
          <div class="cpn-form-row">
            <label for="categoryName" class="cpn-form-row__label">Nom <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="categoryName" class="cpn-field" id="categoryName" data-name="name" required>
          </div>

          <div class="cpn-form-row">
            <label for="categoryDescription" class="cpn-form-row__label">Description</label>
            <textarea name="categoryDescription" class="cpn-field" id="categoryDescription" data-name="description"></textarea>
          </div>

          <div class="cpn-form-row-footer">
            <button class="cpn-btn cpn-btn--red" data-bs-dismiss="modal">Annuler</button>
            <button class="cpn-btn" name="newCategoriesBtn" data-text="Sauvegarder">Sauvegarder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- New Brand -->
<div class="modal fade cpn-modal" id="newBrand">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content cpn-modal__inner">
      <button class="cpn-modal__btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
      <div class="cpn-modal__head">
        <h2 class="cpn-modal__title">
          <div class="cpn-modal__title-inner">
            <div class="cpn-modal__title--create"><i class="icon-plus-02"></i><span class="cpn-modal__title-text">Nouvelle marque</span></div>
            <div class="cpn-modal__title--edit"><i class="icon-edit"></i><span class="cpn-modal__title-text">Modifier Marque</span></div>
          </div>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="admin/shop/brands" method="post" id="formNewBrand" data-mode="create" enctype="multipart/form-data">
          <input type="hidden" name="tbl">
          <input type="hidden" name="id">

          <div class="cpn-form-row">
            <label for="productImage" class="cpn-form-row__label">Image <span class="cpn-form-row__label-required">*</span></label>
            <input type="file" name="file" class="cpn-field js-dropify" id="productImage" accept=".jpg, .jpeg, .png" required>
          </div>

          <div class="cpn-form-row">
            <label for="brandName" class="cpn-form-row__label">Nom <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" name="name" class="cpn-field" id="brandName" data-name="name" required>
          </div>

          <div class="cpn-form-row">
            <label for="brandDescription" class="cpn-form-row__label">Description</label>
            <textarea name="description" class="cpn-field" id="brandDescription" data-name="description"></textarea>
          </div>

          <div class="cpn-form-row-footer">
            <button class="cpn-btn cpn-btn--red" data-bs-dismiss="modal">Annuler</button>
            <button class="cpn-btn" data-text="Sauvegarder">Sauvegarder</button>
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
        <form action="marketing/client" method="Post" id="formNewProduct" data-mode="create">
          <input type="hidden" name="tbl">
          <input type="hidden" name="id">

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
          <div class="cpn-modal__title-inner">
            <div class="cpn-modal__title--create"><i class="icon-plus-02"></i><span class="cpn-modal__title-text">Nouveau caratéristique</span></div>
            <div class="cpn-modal__title--edit"><i class="icon-edit"></i><span class="cpn-modal__title-text">Modifier caratéristique</span></div>
          </div>
        </h2>
      </div>
      <div class="cpn-modal__body">
        <form action="admin/shop/characteristics" method="post" id="formNewCharacteristic"  data-mode="create">
          <input type="hidden" name="tbl">
          <input type="hidden" name="id">

          <div class="cpn-form-row">
            <label for="characteristicName" class="cpn-form-row__label">caratéristique <span class="cpn-form-row__label-required">*</span></label>
            <input type="text" class="cpn-field" name="name" id="characteristicName" data-name="name" required>
          </div>

          <div class="cpn-form-row">
            <label for="characteristicDescription" class="cpn-form-row__label">Description</label>
            <textarea name="description" class="cpn-field" id="characteristicDescription" data-name="description"></textarea>
          </div>

          <div class="cpn-form-row-footer">
            <button class="cpn-btn cpn-btn--red" data-bs-dismiss="modal">Annuler</button>
            <button class="cpn-btn" data-text="Sauvegarder">Sauvegarder</button>
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