const gallery = document.getElementById("gallery");
for(let index in data ){
  let item = data[index];
  let ele = document.createElement('div');
  ele.innerHTML = `<h2>${item.name}</h2>
  <p>${item.description}</p>
  <p>${item.autor}</p>
  <p>${item.price}</p>
  `;

  gallery.appendChild(ele);
};