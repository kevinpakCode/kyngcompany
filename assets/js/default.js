$(document).ready(function(){
/*
*
*/
$('.dropdown-trigger').dropdown()

/*
* Table
*/
//::1 Sort table
$('body').find('.js-tbl-sort').each(function(){
  const table = $(this)
  table.tablesort()
  const tableInstance = table.data('tablesort')
  tableInstance.sort($("th.js-default-sort"), 'desc')
})

//:: Filter table
const tableFilter =  filterfield => {
  const table = $(`#${filterfield.data('search-target')}`)
  filterfield.on('keyup, input', function(){
    const value = $(this).val().toLowerCase()
    const filterItems = table.is('table')? table.find('tbody tr'):table.children()

    filterItems.filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    })
    
  })
}

const allTableSearch = $('body').find('input[type="search"][data-search-target]')
if(allTableSearch) {
  allTableSearch.each(function(){
    tableFilter($(this))
  })
}


/*
* Mask
*/
$('.js-mask-phone').mask('+(229) 00-00-00-00')
$('.js-mask-birthday').mask('00/00')


/*
* Dropify
*/
$('.js-dropify').dropify()




/*
-------------------------------
* Show & Hide password
-------------------------------
*/
const controlPassword = () => {
  $('body').find('input[type="password"]').each(function(){
    const input = $(this)
    input.wrap('<div class="password-wrap"></div>')
    input.after('<span class="control-stage-password icon-eye-closed js-show-password"></span>')
  })
}
controlPassword()
$('.password-wrap').on('click', '.js-show-password', function(e){
  e.preventDefault()
  const eye = $(this)
  const input = eye.siblings('input[name="password"]')
  const inputType = input.attr('type')
  if(inputType==="password") {
    input.attr('type', "text")
    eye.removeClass('icon-eye-closed').addClass('is-open icon-eye-open')
  }else{
    input.attr('type', "password")
    eye.removeClass('is-open icon-eye-open').addClass('icon-eye-closed')
  }
})


/*
-------------------------------
* DASHBOARD
-------------------------------
*/
//::
$('body').on('click', '.js-control-app-mode', function(){
  $('body').toggleClass('app-mode-reduce')
  const appReduceMode = localStorage.getItem('app-reduce-mode')
  if(appReduceMode) {
    localStorage.removeItem('app-reduce-mode')
  }else{
    localStorage.setItem('app-reduce-mode', 'true')
  }
})

//::
const checkAppReduceMode = () => {
  const appReduceMode = localStorage.getItem('app-reduce-mode')
  if(appReduceMode) {
    $('body').addClass('app-mode-reduce')
  }else{
    $('body').removeClass('app-mode-reduce')
  }
}
checkAppReduceMode()


/*
---------------------------------
* CONTROL SIDEBAR WHEN RESIZING
---------------------------------
*/
//::1
const controlSideBarMode = () => {
  const windowWidth = $(window).width()
  if(windowWidth<960) {
    $('body').addClass('app-mode-reduce')
  } else {
    const sidebarInStorage = localStorage.getItem('app-reduce-mode')
    if(!sidebarInStorage) {
      $('body').removeClass('app-mode-reduce')
    }
  }
}
controlSideBarMode()

//::2
$(window).resize(function() {
  controlSideBarMode()
})
  


/*
-------------------------------
* JS-MODAL
-------------------------------
*/
/*$('body').on('click', '[data-modal-target]', function(e){
  e.preventDefault()

  const btn = $(this)
  const modalId = btn.data('modal-target')
  const modal = $('body').find(`#${modalId}`)

  if(modal.length) {
    modal.wrap('<div class="cpn-modal-wrap"></div>')
  }
})*/



/*
-------------------------------
* DROPDOWN
-------------------------------
*/
//::
const dropdown = () => {
  $('body').find('.cpn-dropdown').each(function(){
    const dropdown = $(this)
    const dropdownContent = dropdown.find('.cpn-dropdown__content')
    const dropdownBtn = dropdown.find('.cpn-dropdown__btn')
    const position = dropdownContent.attr('position')

    if(dropdownContent.length) {
      
      const dropdownData = dropdown[0].getBoundingClientRect()
      const dropdownContentData = dropdownContent[0].getBoundingClientRect()
      const dropdownBtnData = dropdownBtn[0].getBoundingClientRect()
      const windowWidth = $(window).width()
      const windowHeight = $(window).height()

      const dropdownMid = (dropdownData.width)/2
      const dropdownContentMid = (dropdownContentData.width)/2
      const starPositionDropDown = dropdownData.x

      const diffWindDrop = windowWidth - (starPositionDropDown+dropdownData.width)

      if(position) {
        if(position==="left") {
          dropdownContent.css({
            left: -1*(dropdownContentData.width + 5)+'px',
            top: '0px'
          })
        }else if(position==="right"){
          dropdownContent.css({
            right: -1*(dropdownContentData.width + 5)+'px',
            top: '0px'
          })
        }
      }else {

        if(windowWidth<(starPositionDropDown+dropdownMid+dropdownContentMid)) {
          dropdownContent.css({
            right: -1*(diffWindDrop - 10)+'px',
            top: (dropdownBtnData.height + 10)+'px'
          })
        }else{
          dropdownContent.css({
            right: -1*(diffWindDrop - 10)+'px',
            top: (dropdownMid+dropdownContentMid)+'px'
          })
        }

      }
      

      //::
      const arrowElem = dropdownContent.find('.cpn-dropdown__content-icon')
      const rightVal = (diffWindDrop-10+dropdownMid+5)
      arrowElem.remove()
      if(!arrowElem.length) {
        dropdownContent.prepend('<span class="cpn-dropdown__content-icon"></span>')

        if(position) {
          if(position==="left") {
            dropdown.find('.cpn-dropdown__content-icon').css({
              position: 'absolute',
              display: 'inline-block',
              borderLeft: 'solid 5px #ddd',
              borderTop: 'solid 5px transparent',
              borderBottom: 'solid 5px transparent',
              top: '10px',
              right: '-5px'
            })
          }else if(position==="right") {
            dropdown.find('.cpn-dropdown__content-icon').css({
              position: 'absolute',
              display: 'inline-block',
              borderRight: 'solid 5px #ddd',
              borderTop: 'solid 5px transparent',
              borderBottom: 'solid 5px transparent',
              top: '510px',
              left: '-5px'
            })
          }
          
        } else {
          dropdown.find('.cpn-dropdown__content-icon').css({
            position: 'absolute',
            display: 'inline-block',
            borderBottom: 'solid 5px #ddd',
            borderLeft: 'solid 5px transparent',
            borderRight: 'solid 5px transparent',
            top: '-5px',
            right: rightVal+'px'
          })
        }
        
      }
    }
  })
}

//:: Event Click
$('.cpn-dropdown').on('click', '.cpn-dropdown__btn', function(e){
  e.preventDefault()
  const btn = $(this)
  $('body').find('.cpn-dropdown.active').removeClass('active')
  btn.closest('.cpn-dropdown').toggleClass('active')
  dropdown()
})

//:: Close when click on body
$('body').on('click', function(e){
  const elem = e.target
  //==>1 :DropDown
  if(!elem.classList[0]==='cpn-dropdown__btn'||!elem.closest('.cpn-dropdown__btn')) {
    $('body').find('.cpn-dropdown').removeClass('active')
  }
})


/*
-------------------------------
* Reduce textContent
-------------------------------
*/
//::
const reduceTextContent = (elem, limit=10) => {
  const text = elem.text()
  if(text.length) {
    const textSplit = text.toString().trim().split(' ').filter(x=>x!=="")
    if(textSplit.length > limit) {
      const textReduce = `${textSplit.slice(0, 32).join(' ')}...`
      const dataText = [text, textReduce]
      elem.empty().html(`<span class="js-textContent-reduce">${textReduce}</span><span class="js-textContent-initial" style="display:none;">${text}</span>`)
      elem.append(`<a href="#" class="cpn-email-list__item-eye js-eye-reduce-text"><i class="icon-eye-plus"></i><i class="icon-eye-minus"></i></a>`)
    }
  }
}

//::
$('body').find('.js-reduce-text').each(function(){
  const elem = $(this)
  reduceTextContent(elem)
})

//:: Event Click eye
$('body').on('click', '.js-eye-reduce-text', function(e){
  e.preventDefault()
  const btn = $(this)
  const btnParent = btn.parent()
  const dataText = btn.data('text')
  const textReduce = btn.siblings('.js-textContent-reduce')
  const textInitial = btn.siblings('.js-textContent-initial')

  if(btnParent.hasClass('open')) {
    btnParent.removeClass('open')
    textReduce.show()
    textInitial.slideUp('slow')
  }else{
    btnParent.addClass('open')
    textReduce.hide()
    textInitial.slideDown('slow')
  }
})


/*
-------------------------------
* CHECK LIST
-------------------------------
*/
const checkboxField = 'input[type="checkbox"][class*="js-check-list-"]'
$('body').on('change', `.js-check-list ${checkboxField}`, function(e){
  e.preventDefault()

  const input = $(this)
  const wrapParent = input.closest('.js-check-list')
  const checkBoxParent = wrapParent.find(`input[type="checkbox"].js-check-list-parent`)
  const notChecked = wrapParent.find(`${checkboxField}:not(:checked)`).length
 
  if(input.is('.js-check-list-parent')) {
    if (input.is(":checked")) {
      wrapParent.find(checkboxField).prop('checked', true)
    } else {
      wrapParent.find(checkboxField).prop('checked', false)
    } 
  }else{
    if(notChecked === 1 && !checkBoxParent.prop('checked')) {
      checkBoxParent.prop('checked', true)
    } else {
      checkBoxParent.prop('checked', false)
    }
  }
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
* JS-btn-SWITCH
-------------------------------
*/
$('body').on('click', '.js-btn-switch', function(e){
  e.preventDefault()
  $(this).toggleClass('active')
})


});//End