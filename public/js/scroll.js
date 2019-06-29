document.addEventListener('DOMContentLoaded',function(){
	var iconI = document.querySelectorAll('.go-to-product');
	window.addEventListener('scroll', function(){

		for( var i = 0 ; i<iconI.length;i++){
			if(window.pageYOffset > (400*i) && window.pageYOffset < (700*i)){
				for( var j = 0; j<=iconI.length ; j++){
					iconI[j].classList.toggle('icon-i-hien');
				}
			}
		}
	});
});