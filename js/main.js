const mainNavToggle = (e)=>{
	document.getElementById('main-nav').classList.toggle('!block');
}

document.getElementById('menu-open')
		.addEventListener('click', mainNavToggle);
		
document.getElementById('menu-close')
		.addEventListener('click', mainNavToggle);
