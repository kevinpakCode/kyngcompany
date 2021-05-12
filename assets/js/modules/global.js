/*
|--------------------------------------------------------------------------
| Générale
|--------------------------------------------------------------------------
|
*/
//==> CURRENT URL
export const base_url = window.location.protocol + "//" +window.location.host+"/";

//==> URL
export const urls = window.location.pathname;
export const url = urls.split('/');
export const urlHref = window.location.href;
export const urlSearch = window.location.search;

//==> STATUS VALUE
export const getStatus = status => {
	let newStatus
	switch(status) {
		case 'delete':
			return	newStatus = 0
			break
		case 'active':
			return	newStatus = 2
			break
		case 'reject':
			return newStatus = 3
			break
		case 'block':
			return newStatus = 4
			break
		default:
			return newStatus = 1
	}

}


//==> CLOSE ALERT MESSAGE 
export const closeFormMessage = btn => {
  btn.closest('.show').removeClass('show success error')
  localStorage.removeItem('formAlert')
}
export const closeAlertMessage = () => {
	$('body').on('click', '#formMessageBtnClose', function(e) {
		e.preventDefault()
		const btn = $(this)
		closeFormMessage(btn)
	})
	
}