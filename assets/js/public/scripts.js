import {base_url, closeAlertMessage} from './../modules/global.js'
import {actionAjaxStart, runAjax, actionAjaxNoRefresh} from './../modules/ajax.js'

/*
|--------------------------------------------------------------------------
| Default
|--------------------------------------------------------------------------
|
*/
//==> 


/*
|--------------------------------------------------------------------------
| Page: Contacts
|--------------------------------------------------------------------------
|
*/

//==>New public message
$('body').on('submit', 'form#formPublicMessage', function(e){
	e.preventDefault()
	const form = $(this)
	const btn = form.find('button[name="newMessageBtn"]')
	actionAjaxStart(form,btn)
	const formData = new FormData(form[0])
	formData.append('ActiveAjax', 'publicMessage')
  const successAction = actionAjaxNoRefresh(form, 'success', 'Votre message a été bien envoyé!')
  runAjax(form, btn, formData, true, successAction)
})


/*
-------------------------------
* ALERT MESSAGE
-------------------------------
*/
//==> Close 
closeAlertMessage()