import {base_url, urlHref, getStatus, closeFormMessage} from './../../modules/global.js'
import {actionAjaxStart, runAjax, actionAjaxNoRefresh} from './../../modules/ajax.js'
/*
-------------------------------
* SWITCH
-------------------------------
*/
export const controlSwitch = () => {
  $('body').on('click', '.js-btn-switch[data-core]', function(e){
    e.preventDefault()
    const btn = $(this)
    const dataCore = btn.data('core')
    const blockMessage = $('#formMessage')
    if(blockMessage.hasClass('show')) {
      blockMessage.removeClass('success error')
    }

    if(dataCore) {
      const formData = new FormData()
      const reelStatus = getStatus(dataCore.status)
      formData.append('ActiveAjax', 'statusSwitch')
      formData.actionUrl = `${base_url}admin/admin/ajax`
      formData.append('table', dataCore.table)
      formData.append('id', dataCore.id)
      formData.append('status', reelStatus)
      const successAction = actionAjaxNoRefresh(null, (reelStatus===2)?'success':'error', (dataCore.status==="active")?dataCore.message.success:dataCore.message.error)
      runAjax(null, btn, formData, true, successAction)
      
    }
    
  })
}


/*
-------------------------------
* JS-MODAL
-------------------------------
*/
export const addEditModal = () => {
  $('body').on('click', '[data-add-update-modal]', function(e){
    e.preventDefault()
  
    const btn = $(this)
    const modalId = btn.data('add-update-modal')
    const modal = new bootstrap.Modal(document.getElementById(`${modalId}`))
    const modalMode = btn.data('mode')
    const modalWindow = jQuery(modal._element)
    if(modal) {
      modal.show()
      if(modalMode) {
        modalWindow.find('form').attr('data-mode', modalMode)
        modalWindow.removeClass('mode--create mode--edit')
        modalWindow.addClass(`mode--${modalMode}`)
      }
    }


    //===>
    if(modalMode&&modalMode==='edit') {
      const dataInfos = btn.data('infos')
      const dataInfosSplit = dataInfos.split('@@@')
      const table = dataInfosSplit[0]
      const id = dataInfosSplit[1]
      modalWindow.find('input[name="tbl"]').val(table)
      modalWindow.find('input[name="id"]').val(id)

      const allField = modalWindow.find('form .cpn-field[data-name]')
      if(allField.length>0) {
        
        const onAjaxSuccess = data => {
          const dataInfos = JSON.parse(data)
          //==> Inject loop
          allField.each(function(){
            const field = $(this)
            const column = field.data('name')
            if(field.is('input[type="text"]') || field.is('textarea')) {
              modalWindow.find(`[data-name='${column}']`).val(dataInfos[column])
            }
            
          })
        }
        //==> Get all infos row
        $.get(
          "/admin/admin/ajax",
          {
            tbl: table,
            id: id
          },
          onAjaxSuccess
        )
        

        
      }
    }
  })
}


