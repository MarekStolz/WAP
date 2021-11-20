const imageArray = [
  "https://www.prehledne24.cz/wp-content/uploads/2021/09/velryba-1.jpg",
  "https://d15-a.sdn.cz/d_15/c_img_QO_U/3Ds0L.jpeg?fl=cro,0,65,1250,703%7Cres,2560,,1%7Cwebp,75",
];

const image = document.querySelector("img");
const button = document.querySelector("button");

window.onload = () => generateRandomPicture(imageArray);

button.addEventListener("click", () => generateRandomPicture(imageArray));

function generateRandomPicture(array){
	let randomNum = Math.floor(Math.random() * array.length); 
	image.setAttribute("src", array[randomNum]);
}