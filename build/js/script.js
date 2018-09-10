/*var modal = document.getElementsById('sixpert-bio');

// Get the button that opens the modal
var btn = document.getElementsById('post-type-sixpert');

// Get the <span> element that closes the modal
var span = document.getElementsClassName('close')[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = 'flex';
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
   modal.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
       modal.style.display = 'none';
    }
}*/

var bio = document.getElementsById('sixpert-bio');

var img = document.getElementsById('post-type-sixpert-thumbnail');

var span = document.getElementsById('sixpert-bio-close')[0];

img.onclick = function () {
	bio.style.display= "block";
}

span.onclick = function () {
	bio.style.display= "none";
}



//function closeBio() {
//	document.getElementsById("sixpert-bio")[0];
//}

//function showBio() {
//	document.getElementsById("sixpert-bio").style.display="block";



