$(document).ready(function(){

/*
-------------------------------
* JS-mobil-menu
-------------------------------
*/
$('body').on('click', '.js-mobil-menu', function(e){
  e.preventDefault()
  $('body').find('.header__menu-wrap').toggleClass('header__menu-wrap--open')
})


/*
-------------------------------
* JS-Scroll
-------------------------------
*/
const constrolHeader = () => {
  const  positionScroll = $(window).scrollTop()
  if(positionScroll>170){
    $('.header').addClass('header--scroll')
  }else{
    $('.header').removeClass('header--scroll')
  }
}
constrolHeader()
$(window).scroll(function(){
  constrolHeader()
})



/*
-------------------------------
* JS-aside-list
-------------------------------
*/
$('body').on('click', '.js-aside-list', function(e){
  if(e.target.classList.contains('cpn-pg__aside-title') || e.target.classList.contains('cpn-pg__aside-title-icon') ) {
    e.preventDefault()
    $(this).toggleClass('cpn-pg__aside--open-for-mobile')
  }
 //console.log(e.target.classList.contains('cpn-pg__aside-title'))
  
})


/*
-------------------------------
* JS-GRIDS
-------------------------------
*/
$('body').on('click', '.js-grids__btn', function(e){
  e.preventDefault()

  const btn = $(this)
  const activeGrid = btn.data('grid')
  const gridsWrap = btn.closest('.cpn-grids')
  btn.siblings('.js-grids__btn').removeClass('active')
  btn.addClass('active')
  gridsWrap.find('.cpn-grids__list').removeClass('cpn-grids--x1 cpn-grids--x2 cpn-grids--x3').addClass(`cpn-grids--x${activeGrid}`)
})


/*
-------------------------------
* PLUS || MINUS - Qty product
-------------------------------
*/
$('body').on('click', '.js-artQty-btn', function(e){
  e.preventDefault()
  const btn = $(this)
  const fieldId = btn.data('target')
  const field = $(`input#${fieldId}`)
  const fieldIniValue = field.val()
  const action = btn.data('action')
  let fieldNewValue = fieldIniValue

  if(action==="plus") {
    fieldNewValue++
  }else{
    if(fieldIniValue>1) {
      fieldNewValue--
    }
  }
  field.val(fieldNewValue)
})


/*
-------------------------------
* SLICK
-------------------------------
*/

const doSlick = (tracker, show, scroll, dots=true,) => {
  const targetSlick = tracker
  let autoPlaySpeed = targetSlick.data('autoplay-speed')
  let autoPlay = autoPlaySpeed

  tracker.slick({
    infinite: true,
    dots: dots,
    slidesToShow: show,
    slidesToScroll: scroll,
    autoplay: autoPlay,
    autoplaySpeed: autoPlaySpeed??2000,
    //speed: 500,
  })
}

//==>Slick
$('body').find('.js-banner-slick').each(function(){
  const bannerSlickBlock = $(this)
  doSlick(bannerSlickBlock, 1, 1)
})


	

});//End
