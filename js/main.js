
// 100vh for mobiles
function appHeight() {
 const doc = document.documentElement
    doc.style.setProperty('--vh', (window.innerHeight*.01) + 'px');
  }

  window.addEventListener('resize', appHeight);
  appHeight();



// login page
	let signIn = document.querySelector('.sign-in');
	let signUp = document.querySelector('.sign-up');

	let signInBtn = document.querySelector('.signInBtn');
	let signUpBtn = document.querySelector('.signUpBtn');

	signUpBtn.addEventListener('click', ()=> {
		signIn.classList.toggle('new-sign-in');
		signUp.classList.toggle('new-sign-up');
		signUpBtn.classList.toggle('active');
		if(signInBtn.classList.contains('active')) {
			signInBtn.classList.remove('active');
		}
	})
	signInBtn.addEventListener('click', ()=> {
		if(signUp.classList.contains('new-sign-up') && signUpBtn.classList.contains('active')) {
			signUpBtn.classList.remove('active');
			signUp.classList.remove('new-sign-up');
			signIn.classList.toggle('new-sign-in');
			signInBtn.classList.add('active');
		}
	});



// BUTTON CLICK ANIMATION
var links = document.querySelectorAll('.ripplelink');
for (var i = 0, len = links.length; i < len; i++) {
  links[i].addEventListener('click', function(e) {
    var targetEl = e.target;
    var inkEl = targetEl.querySelector('.ink');

    if (inkEl) {
      inkEl.classList.remove('animate');
    }
    else {
      inkEl = document.createElement('span');
      inkEl.classList.add('ink');
      inkEl.style.width = inkEl.style.height = Math.max(targetEl.offsetWidth, targetEl.offsetHeight) + 'px';
      targetEl.appendChild(inkEl);
    }

    inkEl.style.left = (e.offsetX - inkEl.offsetWidth / 2) + 'px';
    inkEl.style.top = (e.offsetY - inkEl.offsetHeight / 2) + 'px';
    inkEl.classList.add('animate');
  }, false);
}
