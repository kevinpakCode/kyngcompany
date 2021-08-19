import {base_url, urlHref, getStatus, closeAlertMessage} from './../modules/global.js'
import {actionAjaxStart, runAjax, actionAjaxNoRefresh} from './../modules/ajax.js'

import {controlSwitch} from './../back-office/_modules/global_module.js'

import {createEditCatalog, createEditBrand, createEditCharacteristic} from './_modules/shop_module.js'

/*
-------------------------------
* CHANGE STATUS
-------------------------------
*/
//==> 01
$('body').on('click', '.js-change-status', function(e){
  e.preventDefault()
  const btn = $(this)
  const form = $(btn.data('bs-target'))
  const data = btn.data('core')
  const title = data.title
  const dataField = form.find('input[name="data"]')
  dataField.val(JSON.stringify(data))
  if(data.multiple) {
    const checkedFields = $('body').find(`input[name*="${data.multiple}"]:checked`)
    if(checkedFields.length===0){
     // $('#changeStatus').removeClass('show')
    }
  }
  if(title) {
    form.find('.js-modal-title').empty().html(title)
  }

})
//==> 02
$('body').on('submit', '#formChangeStatus', function(e){
  e.preventDefault()

  const form = $(this)
  const btn = form.find('button[name*="Btn"]')
  actionAjaxStart(form,btn)
  const formId = form.attr('id')
  const dataInfos = JSON.parse(form.find('input[name="data"]').val())
  const status = dataInfos.status
  const multipleAction = dataInfos.multiple
  const newStatus = getStatus(status)
  const formData = new FormData(form[0])
  formData.append('ActiveAjax', 'changeStatus')
  formData.append('table', dataInfos.table)
  formData.append('id', dataInfos.id)
  formData.append('status', newStatus)
  formData.append('redirectUrl', urlHref)
  if(multipleAction) {
    const multipleData = []
    $('body').find(`input[name*="${multipleAction}"]:checked`).each(function(){
      const input = $(this)
      multipleData.push(input.data('id'))
    })
    formData.append('multiple', JSON.stringify(multipleData))    
  }
  
  //const successAction = actionAjaxNoRefresh(form, 'success', 'Votre message a été bien envoyé!')
  runAjax(form, btn, formData, false)

})


/*
-------------------------------
* SHOP
-------------------------------
*/
//==> Create OR EDIT Catalog
createEditCatalog()

//==> Create OR EDIT Brand
createEditBrand()

//==> Create OR EDIT Characteristic
createEditCharacteristic()

/*
-------------------------------
* SWITCH
-------------------------------
*/
//==> 
controlSwitch()

/*
-------------------------------
* ALERT MESSAGE
-------------------------------
*/
//==> Close 
closeAlertMessage()