import {base_url, urlHref} from './../../modules/global.js'
import {actionAjaxStart, runAjax, actionAjaxNoRefresh} from './../../modules/ajax.js'

export const createEditCatalog = () => {
  $('body').on('submit', '#formNewCategory', function(e){
    e.preventDefault()
  
    const form = $(this)
    const btn = form.find('button[name*="Btn"]')
    const formMode = form.data('mode')
    actionAjaxStart(form,btn)
    const formData = new FormData(form[0])
    formData.append('redirectUrl', urlHref)

    if(formMode.length&&formMode==="edit") {
      formData.append('ActiveAjax', 'editCatalog')
    } else {
      formData.append('ActiveAjax', 'newCatalog')
    }
    runAjax(form, btn, formData, false)
  
  })
}


export const createEditBrand = () => {
  $('body').on('submit', '#formNewBrand', function(e){
    e.preventDefault()
  
    const form = $(this)
    const btn = form.find('button[name*="Btn"]')
    const formMode = form.data('mode')
    actionAjaxStart(form,btn)
    const formData = new FormData(form[0])
    formData.append('redirectUrl', urlHref)

    if(formMode.length&&formMode==="edit") {
      formData.append('ActiveAjax', 'editBrand')
    } else {
      formData.append('ActiveAjax', 'newBrand')
    }
    runAjax(form, btn, formData, false)
  
  })
}