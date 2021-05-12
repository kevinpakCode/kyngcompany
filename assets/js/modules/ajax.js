import {base_url} from './global.js'
/*
|--------------------------------------------------------------------------
| Générale
|--------------------------------------------------------------------------
|
*/
export const actionAjaxStart = (form, btn) =>{
	btn.prop("disabled", true)
	btn.html('Chargement... ')
}

export const actionAjaxError = (form, btn, message) => {
	form.find(".js-alert").remove()
	form.append(`<div class="form-alert js-alert">${message}</div>`)
	btn.html(btn.data('text'))
	btn.prop("disabled", false)
}

export const actionAjaxInit = (form, btn, btnText) =>{
	form.find(".js-alert").remove();
	btn.html(btnText);
	btn.prop("disabled", false);
}

export const actionAjaxNoRefresh = (form, status, message) =>{
  if(form!==null) {
    form.find('input:not([type="checkbox"]), textarea').each(function(){
      const input = $(this)
      input.val('')
    })
  }
  

  //Create local storage
  localStorage.removeItem('formAlert')
  const alertContent = {
    status :  status,
    message : message
  }
  const blocFormMessage = $('#formMessage')
  localStorage.setItem('formAlert', JSON.stringify(alertContent))
  blocFormMessage.find('.js-formMessageBody').empty().html(message)
  blocFormMessage.addClass(`show ${status}`)
  console.log('alert success')
}

export const runAjax = (form, btn, formData, submitStatus=false, successAction=null) => {
  $.ajax({
    type: "POST",
    url:  form!==null?`${base_url}/${form.attr('action')}`:formData.actionUrl,
    data: formData,
    processData: false,
    contentType: false,
    dataType: "json",
    async: false,
    success: function(data){
      if(data.status==='success') {
        if(submitStatus) {
          successAction
        } else {
          if(data.data.indexOf("http") !== -1){
            document.location.href=data.data;
          }else{
            console.log('error.....')
          }
        }

      }else{
        actionAjaxError(form, btn, data.message)
      }
    },
    error: function(data){
      console.log("Can not perform the upload action:" + JSON.stringify(data));
    }
  })
}

