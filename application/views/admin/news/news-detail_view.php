<div class="pg-news-detail">
  <!-- CRUMBS -->
  <div class="cpn-crumbs">
    <ul class="cpn-crumbs__list">
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/dashboard';?>" class="cpn-crumbs__list-item-link">Dashboard</a></li>
      <li class="cpn-crumbs__list-item"><a href="<?=base_url().'admin/news';?>" class="cpn-crumbs__list-item-link">Les Actualités</a></li>
      <li class="cpn-crumbs__list-item">Détail Actualité</li>
    </ul>
  </div>

  <!-- PLAQQUE -->
  <div class="cpn-plaque">
    <secction class="pg-news-detail-head">
      <div class="pg-news-detail-head-infos cpn-card">
        <h2 class="pg-news-detail__title">
          <span class="text">Voice Africa 2021</span>
        </h2>
        <div class="pg-news-detail__date">
          <i class="icon-calendar"></i>
          <span class="text">22-05-2021, 18:00:00</span>  
        </div>
        <div class="pg-news-detail__img">
          <img src="<?=base_url().'/assets/images/init/default-image.jpg'?>" alt="image catégorie news">
        </div>
        <div class="pg-news-detail__content">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. At quis labore minima expedita fugiat?
          Hic perferendis nisi ipsa error laudantium ab ducimus cum, corrupti fugit quasi quo velit facere 
          commodi.
        </div>
      </div>
      <div class="pg-news-detail-head-statistic cpn-card">
        <div class="cpn-num-btns">
          <button class="cpn-num-btns__item">
            <span class="label">Commentaires</span>
            <span class="num">200</span>
          </button>
          <button class="cpn-num-btns__item">
            <span class="label">J'aime</span>
            <span class="num">200</span>
          </button>
          <button class="cpn-num-btns__item">
            <span class="label">Partage</span>
            <span class="num">200</span>
          </button>
        </div>
      </div>
    </secction>

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