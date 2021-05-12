$(document).ready(function(){
	const base_url = window.location.protocol + "//" +window.location.host+"/";
	const urls = window.location.pathname;
	const url = urls.split('/');
	const urlHref = window.location.href;


  

  /*
  |--------------------------------------------------------------------------
  | 
  |------------------------------- -------------------------------------------
  |
  */
  function actionAjaxStart(form,btn){
    btn.prop("disabled", true);
    btn.html('Chargement... <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>')
  }
  function actionAjaxError(form,btn,btnText,message){
    form.find(".js-alert").remove()
    form.append('<div class="form-alert js-alert">'+message+'</div>')
    btn.html(btnText)
    btn.prop("disabled", false)
  }
  function actionAjaxInit(form,btn,btnText){
    form.find(".js-alert").remove()
    btn.html(btnText)
    btn.prop("disabled", false)
  }




  /*
  |--------------------------------------------------------------------------
  | ==> LOGIN
  |------------------------------- -------------------------------------------
  |
  */

  $('body').on('submit', 'form#login', function(e){
    e.preventDefault();
    const form = $(this);
    const btn = form.find('button[name="newMessageBtn"]')
  
    actionAjaxStart(form,btn);
    const formData = new FormData(form[0])
    formData.append('ActiveAjax', 'login')
  
    $.ajax({
      type: "POST",
      url:  base_url+''+form.attr('action'),
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      async: false,
      success: function(data){
        console.log('ooooo3333', data.status)
        if(data.status==='success'){
          document.location.href=data.data
        }else{
          const btnText ='Se connecter'
          const message = data.message
          actionAjaxError(form,btn,btnText,message)
        }
      },
      error: function(data){
        console.log("Can not perform the upload action:" + JSON.stringify(data))
      }
    })
  })






  /*
  |--------------------------------------------------------------------------
  | ==> Actions
  |------------------------------- -------------------------------------------
  |
  */
  const selectedItems = []
  const initialAmount = () => $('body').find('input[name="initialAmount"]').val()
  const totalReducerAmount = () => $('body').find('input[name="totalReducer"]').val()
  const setTotalReducerAmount = (val, newTotal) => {
    $('body').find('input[name="totalReducer"]').val(val)
    $('body').find('#totalReducerShow').empty().text(val)
    $('body').find('#endAmountShow').empty().text(newTotal)
  }
  


  //------> 01
  $('body').on('click', '#startApplication', function(e){
    e.preventDefault()

    const btn = $(this)
    const initAmount = initialAmount()
    
    if(!btn.hasClass('active')) {
      btn.addClass('active')
      
      const actionContent = `
        <div class="previewAction">
          <div class="previewAction__row">
            <strong>Inititiale </strong>: ${initAmount}f
          </div>
          <div class="previewAction__row">
            <strong>Selection</strong>: <span id="totalReducerShow">0</span> f
          </div>
          <hr/>
          <div class="previewAction__row">
            <strong>Resultat</strong>: <span id="endAmountShow">${initAmount}</span> f
          </div>
          
          <div class="previewAction__btns">
            <a href="${urlHref}" class="cpn-btn cansel">Annuler</a>
            <a href="#" class="cpn-btn save" id="startSave">Appliquer</a>
          </div>
        </div>
      `

      $('body').find('.cpn-receipt__item').each(function(e){
        $(this).addClass('js-receiptItem')
      })

      $('body').append(`
        ${actionContent}
        <input type="hidden" value="0" name="totalReducer" />
        <input type="hidden"  name="listReceipts" />
      `)
    }
    
  })


  //------> 02
  const ActionItem = (item, action) => {
  const itemId = item.data('id')
  const itemValue = item.data('value')
  const initAmount = initialAmount()
  const currentReducerAmount = totalReducerAmount()
  let newReducerAmount = Number(currentReducerAmount)
  let newTotal = Number(initAmount)

  if(action==="add") {
    newReducerAmount += Number(itemValue)
    selectedItems.push(itemId)
  } else if(action==="remove") {
    newReducerAmount -= Number(itemValue)
    const position = selectedItems.indexOf(itemId)
    selectedItems.splice(position, 1)
  }
  newTotal -= Number(newReducerAmount)
  setTotalReducerAmount(newReducerAmount, newTotal)

  console.log(selectedItems)
  }

  $('body').on('click', '.js-receiptItem', function(e){
    e.preventDefault()

    const item = $(this)

    if(!item.hasClass('active')) {
    item.addClass('active')
    ActionItem(item, 'add')
    } else {
    item.removeClass('active')
    ActionItem(item, 'remove')

    }
  })


  //------> 03
  $('body').on('click', '#startSave', function(e){
    e.preventDefault()

    const item = $(this)
    $('body').append(`<div class="cpn-box" id="box"></div>`)
    $('body').find('#box').jmspinner('large')
    
    if(selectedItems.length) {

      const formData = new FormData()
      formData.append('selectedItems', JSON.stringify(selectedItems))
      formData.append('ActiveAjax', 'actionsReceipt')

      

      $.ajax({
        type: "POST",
        url:  base_url+'filiale/action',
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        async: false,
        success: function(data){
          document.location.href=urlHref         
        },
        error: function(data){
          console.log("Can not perform the upload action:" + JSON.stringify(data))
        }
      })

    }else{
      alert('Aucun élément sélèctionné')
    }
  })
  

});//END DOCUMENT
