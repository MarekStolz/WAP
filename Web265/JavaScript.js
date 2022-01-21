const vyber = [
  "https://upload.wikimedia.org/wikipedia/commons/8/8a/Corp1516_-_Flickr_-_NOAA_Photo_Library.jpg",
  "https://d15-a.sdn.cz/d_15/c_img_QO_U/3Ds0L.jpeg?fl=cro,0,65,1250,703%7Cres,2560,,1%7Cwebp,75",
  "https://www.cfact.org/wp-content/uploads/2019/10/auto-draft-48.jpg",
  "http://2.bp.blogspot.com/-Zxw-mziDzRw/Tol3mbWL5JI/AAAAAAAABXc/0_rhBXiGdek/s1600/arcticwolf1.jpg",
  "http://www.slavneobrazy.cz/obr/pict/6848.jpg",
];

const image = document.querySelector("img");
const button = document.querySelector("button");

window.onload = () => generateRandomPicture(vyber);

button.addEventListener("click", () => generateRandomPicture(vyber));

function generateRandomPicture(array){
	let randomNum = Math.floor(Math.random() * array.length); 
	image.setAttribute("src", array[randomNum]);
}

