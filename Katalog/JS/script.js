const gallery = document.getElementById("gallery");
for(let index in data ){
  let item = data[index];
  let ele = document.createElement('div');
  ele.innerHTML = `
  <img src="${item.images}" class="img" > 
  <h2>${item.name}</h2>
  <p>${item.description}</p>
  <p>${item.price}</p>
  <h3>${item.autor}</h3>
  `;

  gallery.appendChild(ele);
};