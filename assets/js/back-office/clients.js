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
  | ==> Marketing
  |------------------------------- -------------------------------------------
  |
  */
  //==> Add News Client
  $('body').on('submit', 'form#newClient', function(e){
    e.preventDefault();
    const form = $(this);
    const btn = form.find('button[name="newMessageBtn"]')
    const btnText = btn.text()
  
    actionAjaxStart(form,btn);
    const formData = new FormData(form[0])
    formData.append('ActiveAjax', 'newClient')
  
    $.ajax({
      type: "POST",
      url:  base_url+''+form.attr('action'),
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      async: false,
      success: function(data){
        console.log('return ajax', data)
        if(data.status==='success'){
          document.location.href=data.data
        }else{
          const message = data.message
          actionAjaxError(form,btn,btnText,message)
        }
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log("Can not perform the upload action:" + JSON.stringify(jqXHR.status+' / '+textStatus+' / '+errorThrown))
        if(jqXHR.status===500) {
          actionAjaxError(form,btn,btnText,`Error:500 - (Désolé votre requête a été rejetée. Veuillez vérifier vos données et reesayez)`)
        } else {
          actionAjaxError(form,btn,btnText,`Error:Serveur - (Désolé votre requête a été rejetée. Veuillez vérifier vos données et reesayez)`)
        }
      }
    })
  })

  //==> Add Catégorie  cart
  $('body').on('submit', 'form#newCategorieCard', function(e){
    e.preventDefault();
    const form = $(this);
    const btn = form.find('button[name="newMessageBtn"]')
    const btnText = btn.text()
  
    actionAjaxStart(form,btn);
    const formData = new FormData(form[0])
    formData.append('ActiveAjax', 'formNewCategorieCard')
  
    $.ajax({
      type: "POST",
      url:  base_url+''+form.attr('action'),
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json",
      async: false,
      success: function(data){
        console.log('return ajax', data)
        if(data.status==='success'){
          document.location.href=data.data
        }else{
          const message = data.message
          actionAjaxError(form,btn,btnText,message)
        }
      },
      error: function(jqXHR, textStatus, errorThrown){
        console.log("Can not perform the upload action:" + JSON.stringify(jqXHR.status+' / '+textStatus+' / '+errorThrown))
        if(jqXHR.status===500) {
          actionAjaxError(form,btn,btnText,`Error:500 - (Désolé votre requête a été rejetée. Veuillez vérifier vos données et reesayez)`)
        } else {
          actionAjaxError(form,btn,btnText,`Error:Serveur - (Désolé votre requête a été rejetée. Veuillez vérifier vos données et reesayez)`)
        }
      }
    })
  })







  
  

});//END DOCUMENT
