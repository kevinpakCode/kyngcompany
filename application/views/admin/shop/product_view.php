<div class="pg-product">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/shop/products';?>" class="cpn-crumbs__list-item-link">Boutique</a></li>
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/shop/products';?>" class="cpn-crumbs__list-item-link">Produits</a></li>
      <li class="cpn-crumbs__list-item">Name Prodoct</li>
    </ul>
  </div>

  <!-- PageMenu -->
  <div class="cpn-plaque">

    <section class="product-card">
      <div class="product-card__inner">
        <button class="product-card__btn" data-bs-toggle="modal" data-bs-target="#newProduct"><i class="icon-edit"></i></button>
        <div class="product-card__image">
          <img src="<?=base_url().'/assets/images/upload/products/dafault/img3.jpeg'?>" alt="product image">
        </div>
        <div class="product-card__infos">
          <div class="product-card__infos-name">My product name</div>
          <div class="product-card__infos-row">
            <small class="label">Catégorie:</small>
            <small class="text">Voiture</small>
          </div>
          <div class="product-card__infos-row">
            <small class="label">Marque:</small>
            <small class="text">BMW</small>
          </div>
          <div class="product-card__infos-row">
            <small class="label">Prix d'achat:</small>
            <small class="text">8 000 000 f</small>
          </div>
          <div class="product-card__infos-row">
            <small class="label">Prix de vente:</small>
            <small class="text">12 000 000 f</small>
          </div>
          <div class="product-card__infos-row">
            <span class="cpn-stars">
              <i class="icon-star icon-star--yellow"></i>
              <i class="icon-star icon-star--yellow"></i>
              <i class="icon-star icon-star--yellow"></i>
              <i class="icon-star icon-star--yellow"></i>
            </span>
          </div>
        </div>
        <div class="product-card__description">
          <div class="cpn-title-section cpn-title-section--border-b">Description</div>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id provident accusantium aut 
            exercitationem magni numquam sint cumque cum unde vel optio, officia ad sequi laboriosam dignissimos repudiandae 
            voluptatibus asperiores aliquam sunt praesentium? Dignissimos nemo delectus sequi magni odio ipsum inventore? Nisi
             quibusdam fuga molestias accusamus quaerat inventore ratione placeat in! Ea reiciendis vel corrupti amet repellendus 
             neque similique, deserunt fugiat eos? Deserunt eos laudantium assumenda nemo suscipit commodi neque mollitia iusto nihil 
             cupiditate provident, minima eius harum fuga, iure libero sit! Dicta voluptas accusamus cupiditate in quod quo tenetur 
             dolores nobis natus, consectetur ea, quae blanditiis nam laborum nihil molestias quaerat, unde amet eaque beatae similique!
            Facere vitae doloribus nostrum odit nobis ratione, architecto necessitatibus quos, itaque ea saepe? Facere architecto 
            aperiam deleniti velit reprehenderit commodi ad voluptate iusto impedit in eius reiciendis rerum, ullam fugit asperiores 
            temporibus, accusamus repudiandae ratione perferendis quidem ut autem repellendus! Id ut ab quis aliquam consequuntur 
            magnam minima, beatae ad reprehenderit at consequatur, nostrum dolorem molestias ea esse totam. Totam rerum quaerat 
            corporis. Ullam, amet. Assumenda repellendus non quasi quisquam itaque ad, nemo laudantium saepe ratione impedit ex, 
            sapiente veniam rem cupiditate quam tempore reprehenderit voluptatibus illo modi est sequi aperiam numquam!
            Exercitationem modi similique necessitatibus dolore at architecto, magni reiciendis nesciunt itaque accusantium 
            quas numquam eveniet ducimus eius? Impedit, vitae deserunt minus praesentium asperiores quae id fuga consequatur 
            delectus voluptate ullam eius, nisi, quasi dolor deleniti illum. Deserunt, 
            atque officia tempora voluptas saepe asperiores eaque labore facere vero modi, consectetur unde quibusdam vel.
          </p>
        </div>
      </div>
    </section>

    <!-- Characteristics -->
    <section class="cpn-others-infos">
      <!-- ACTIONS PAGES -->
      <div class="cpn-pg-actions cpn-pg-actions--with-title">
        <h2 class="cpn-pg-actions__title">Caractéristiques</h2>
        <ul class="cpn-pg-actions__list">
          <li class="cpn-pg-actions__list-item">
            <button class="cpn-pg-actions__list-item-btn" data-bs-toggle="modal" data-bs-target="#newCharacteristic">
              <i class="icon-plus"></i>
              <span class="text">Ajouter</span>
            </button>
          </li>
        </ul>
      </div>
      <div class="cpn-others-infos__inner cpn-card">
        <!-- Search -->
        <div class="cpn-search">
          <div class="cpn-search__content">
            <input type="search" placeholder="Recherche" class="cpn-search__field" name="searchMessage" id="searchMessageField">
          </div>
        </div>

        <!-- TABLES -->
        <div class="cpn-wrap-table cpn-scroll-bar--xy">
          <table class="cpn-table cpn-table--top">
            <thead>
              <tr>
                <th class="cpn-table__date">Date</th>
                <th class="cpn-table__name">Nom</th>
                <th>valeur</th>
                <th>Description</th>
                <th class="cpn-table__actions">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>12-03-2021, 20:18</td>
                <td>Couleur</td>
                <td>Blanc</td>
                <td></td>
                <td>
                  <div class="cpn-table__actions-btns">
                    <button class="cpn-btn-switch js-btn-switch"></button>
                    <button class="cpn-table__actions-item" data-bs-toggle="modal" data-bs-target="#newCharacteristic"><i class="icon-edit"></i></button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>

    <!-- Others Images -->
    <section class="cpn-others-infos">
      <!-- ACTIONS PAGES -->
      <div class="cpn-pg-actions cpn-pg-actions--with-title">
        <h2 class="cpn-pg-actions__title">Autres Images</h2>
        <ul class="cpn-pg-actions__list">
          <li class="cpn-pg-actions__list-item">
            <button class="cpn-pg-actions__list-item-btn" data-bs-toggle="modal" data-bs-target="#newImages">
              <i class="icon-plus"></i>
              <span class="text">Ajouter</span>
            </button>
          </li>
        </ul>
      </div>
      <div class="cpn-others-infos__inner cpn-card">
        <!-- Search -->
        <div class="cpn-search">
          <div class="cpn-search__content">
            <input type="search" placeholder="Recherche" class="cpn-search__field" name="searchMessage" id="searchMessageField">
          </div>
        </div>

        <!-- TABLES -->
        <div class="cpn-wrap-table cpn-scroll-bar--xy">
          <table class="cpn-table cpn-table--top">
            <thead>
              <tr>
                <th class="cpn-table__date">Date</th>
                <th class="cpn-table__name">Images</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>12-03-2021, 20:18</td>
                <td>
                  <ul class="cpn-list-img">
                    <li class="cpn-list-img__item">
                      <span class="cpn-list-img__item-img">
                        <img src="<?=base_url().'/assets/images/upload/products/dafault/img3.jpeg'?>" alt="product image">
                      </span>
                      <span class="cpn-list-img__item-actions">
                        <button class="cpn-list-img__item-actions__btn cpn-btn-switch js-btn-switch"></button>
                        <button class="cpn-list-img__item-actions__btn"><i class="icon-delete icon-delete--red"></i></button>
                      </span>
                    </li>
                    <li class="cpn-list-img__item">
                      <span class="cpn-list-img__item-img">
                        <img src="<?=base_url().'/assets/images/upload/products/dafault/img6.jpeg'?>" alt="product image">
                      </span>
                      <span class="cpn-list-img__item-actions">
                        <button class="cpn-list-img__item-actions__btn cpn-btn-switch js-btn-switch"></button>
                        <button class="cpn-list-img__item-actions__btn" data-bs-toggle="modal" data-bs-target="#confirmationDelete"><i class="icon-delete icon-delete--red"></i></button>
                      </span>
                    </li>
                    <li class="cpn-list-img__item">
                      <span class="cpn-list-img__item-img">
                        <img src="<?=base_url().'/assets/images/upload/products/dafault/img2.jpeg'?>" alt="product image">
                      </span>
                      <span class="cpn-list-img__item-actions">
                        <button class="cpn-list-img__item-actions__btn cpn-btn-switch js-btn-switch"></button>
                        <button class="cpn-list-img__item-actions__btn" data-bs-toggle="modal" data-bs-target="#confirmationDelete"><i class="icon-delete icon-delete--red"></i></button>
                      </span>
                    </li>
                    <li class="cpn-list-img__item">
                      <span class="cpn-list-img__item-img">
                        <img src="<?=base_url().'/assets/images/upload/products/dafault/img4.jpeg'?>" alt="product image">
                      </span>
                      <span class="cpn-list-img__item-actions">
                        <button class="cpn-list-img__item-actions__btn cpn-btn-switch js-btn-switch"></button>
                        <button class="cpn-list-img__item-actions__btn" data-bs-toggle="modal" data-bs-target="#confirmationDelete"><i class="icon-delete icon-delete--red"></i></button>
                      </span>
                    </li>
                    <li class="cpn-list-img__item">
                      <span class="cpn-list-img__item-img">
                        <img src="<?=base_url().'/assets/images/upload/products/dafault/img5.jpeg'?>" alt="product image">
                      </span>
                      <span class="cpn-list-img__item-actions">
                        <button class="cpn-list-img__item-actions__btn cpn-btn-switch js-btn-switch"></button>
                        <button class="cpn-list-img__item-actions__btn" data-bs-toggle="modal" data-bs-target="#confirmationDelete"><i class="icon-delete icon-delete--red"></i></button>
                      </span>
                    </li>
                  </ul>
                </td>
                <td>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi cumque atque quia officiis 
                  expedita vitae optio itaque id mollitia nulla odio excepturi soluta eligendi, reiciendis 
                  labore, voluptates esse minus, saepe eveniet similique earum odit consequatur reprehenderit? 
                  Possimus amet laudantium earum tenetur. Maxime eos error inventore doloremque quod laboriosam 
                  doloribus eius suscipit incidunt labore. Magni, obcaecati laudantium? 
                  Quo voluptatum id sint ea non repudiandae assumenda laudantium.
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>

  </div>
</div>