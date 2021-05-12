<div class="cpn-pg pg-article">
  <!-- PAGE HEAD -->
  <div class="cpn-pg__head">
    <div class="cpn-container">
      <!-- CRUMBS -->
      <div class="cpn-crumbs">
        <ul class="cpn-crumbs__list">
          <li class="cpn-crumbs__list-item"><a href="<?=base_url();?>" class="cpn-crumbs__list-item-link">Accueil</a></li>
          <li class="cpn-crumbs__list-item"><a href="<?=base_url().'shop';?>" class="cpn-crumbs__list-item-link">Boutique</a></li>
          <li class="cpn-crumbs__list-item"><a href="<?=base_url().'shop';?>" class="cpn-crumbs__list-item-link">Catégories</a></li>
          <li class="cpn-crumbs__list-item">Article</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- PAGE Body -->
  <div class="cpn-pg__body">
    <div class="cpn-container">
      <!-- PAGE TITLE -->
      <h1 class="cpn-h1 pg-news__title cpn-pg__section-title">Article choisi</h1>

      <section class="pg-article__section">
        <div class="pg-article__selected">
          <div class="pg-article__selected-left">
            <div class="pg-article__selected-slider"></div>
          </div>
          <div class="pg-article__selected-right">
            <div class="pg-article__selected-right-head">
              <span class="cpn-stars">
                <i class="icon-star icon-star--yellow"></i>
                <i class="icon-star icon-star--yellow"></i>
                <i class="icon-star icon-star--yellow"></i>
                <i class="icon-star icon-star--yellow"></i>
              </span>
              <span class="pg-article__selected-price"><strong class="pg-article__selected-price-value">250 000F</strong> cfa</span>
              <div class="pg-article__selected-actions">
                <div class="pg-article__selected-actions-choice">
                  <button class="pg-article__selected-actions-choice-btn js-artQty-btn" data-action="minus" data-target="artQty"><i class="icon-minus"></i></button>
                  <input type="number" class="pg-article__selected-actions-choice-qty" value="1" min="1" id="artQty">
                  <button class="pg-article__selected-actions-choice-btn js-artQty-btn" data-action="plus" data-target="artQty"><i class="icon-plus"></i></button>
                </div>
                <button class="pg-article__selected-actions-btn-add"><i class="icon-shopping-cart"></i> Ajouter</button>
              </div>
            </div>
            <div class="pg-article__selected-right-body">
              <ul class="pg-article__selected-characteristic">
                <li class="pg-article__selected-characteristic-item">
                  <div class="label">Catégories:</div>
                  <div class="value">Portable</div>
                </li>
                <li class="pg-article__selected-characteristic-item">
                  <div class="label">Couleur:</div>
                  <div class="value">Noir</div>
                </li>
                <li class="pg-article__selected-characteristic-item">
                  <div class="label">Poids:</div>
                  <div class="value">625 g</div>
                </li>
                
              </ul>
            </div>
          </div>

          <div class="pg-article__selected-description">
            <h3 class="pg-article__selected-description-title">Description</h3>
            <div class="pg-article__selected-description-content">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo eos, recusandae perferendis 
              fuga saepe hic sequi suscipit laboriosam exercitationem voluptate reprehenderit assumenda 
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo eos, recusandae perferendis 
              fuga saepe hic sequi suscipit laboriosam exercitationem voluptate reprehenderit assumenda 
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo eos, recusandae perferendis 
              fuga saepe hic sequi suscipit laboriosam exercitationem voluptate reprehenderit assumenda 
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo eos, recusandae perferendis 
              fuga saepe hic sequi suscipit laboriosam exercitationem voluptate reprehenderit assumenda 
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- LAST ARTICLES -->
    <?php  $this->load->view('public/widgets/last-articles_view');?>
  </div>

</div>