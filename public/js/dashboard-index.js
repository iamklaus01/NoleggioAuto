/* Display the uploaded image */

const displayFile = function(event) {
	const image = document.getElementById('uploadImage');
	image.src = URL.createObjectURL(event.target.files[0]);
};

/*Show modal when necessary*/
document.querySelector(".close-popUp").addEventListener('click' , function(){
	document.querySelector(".result-container").style.display = "none";
});