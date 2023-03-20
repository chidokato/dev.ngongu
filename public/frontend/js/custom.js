

var prevScrollpos = window.pageYOffset;
var myDiv = document.querySelector('body')
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  
  if (currentScrollPos > 80) {
    myDiv.classList.add("scrollDown");
  } else {
    myDiv.classList.remove("scrollDown");
  }

  if (prevScrollpos > currentScrollPos) {
    myDiv.classList.remove("scrollUp");
  } else {
    myDiv.classList.add("scrollUp");
  }

  if (currentScrollPos + window.innerHeight >= myDiv.scrollHeight) {
    myDiv.classList.remove("scrollUp");

  }

  prevScrollpos = currentScrollPos;

  var fixBottomElement = document.getElementById('fix-ft')
  var fixBottomAnchor = document.getElementById('fix-ft-anchor')
  
  // var fixBottom = fixBottomAnchor.getBoundingClientRect().top

  // if(fixBottom < 0) {
  //   fixBottomElement.classList.add("fixBottom");
  // } else {
  //   fixBottomElement.classList.remove("fixBottom");
  // }
}





var mainMenu = document.getElementById('navbarToggler');
    mainMenu.onclick = function() {toggleActive()}
    function toggleActive() {
      mainMenu.classList.toggle("active");
      document.querySelector('header').classList.toggle("show");
    }
    
// var expandSearchBtn = document.getElementById('expand-search-btn');
    // expandSearchBtn.onclick = function() {toggleClassActive()}

// var closeSearchBtn = document.querySelector('#expand-search .btn-close')
//     closeSearchBtn.onclick = function() {toggleClassActive()}
//     function toggleClassActive() {
//       expandSearchBtn.classList.toggle("active");
//     }


function myFunctLink(element) {
  location.href = element.attributes.href.value;
}


var scrollSpy = new bootstrap.ScrollSpy(document.body, {
  target: '#review-4-phuong',
  offset: 100
})