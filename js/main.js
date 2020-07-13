var status = 0;
var imgs = [
  'http://morrrsel.com/untitled/wp-content/themes/basquiat/img/menu-link.svg',
  'http://morrrsel.com/untitled/wp-content/themes/basquiat/img/menu-link-w.svg',
  'http://morrrsel.com/untitled/wp-content/themes/basquiat/img/menu-link-close-w.svg'
];

jQuery('.menu-link').click(function(){
  jQuery('.main-menu').toggleClass('showNav');
  jQuery('.main-header h1').toggle();
  // if menu is closed, swap menu icon for x/close icon
  if(status==0){
  	jQuery('.menu-link img').attr('src',imgs[2]);
  	status=1;
  // if menu is open, swap x/close icon for menu icon
  } else {
  	// if this is the home page
  	if(jQuery('.home').length){
  		jQuery('.menu-link img').attr('src',imgs[0]);
  	} else {
  		jQuery('.menu-link img').attr('src',imgs[1]);
  	}
  	status=0;
  }
})