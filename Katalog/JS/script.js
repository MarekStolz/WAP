const gallery = document.getElementById("gallery");
const detail = document.getElementById("detail");
for (let index in data) {
  let item = data[index];
  let ele = document.createElement("div");
  ele.innerHTML = `
  <img src="${item.images}" class="img" alt="${item.description}"> 
  <h2>${item.name}</h2>
  <p>${item.description}</p>
  <p>${item.price}</p>
  <h3>${item.autor}</h3>
  `; gallery.appendChild(ele);

  ele.onclick = () => {
    detail.innerHTML = `<div class="detail-item">
    <img src="${item.images}" class="img" alt="${item.description}"> 
  <h2>${item.name}</h2>
  <p>${item.description}</p>
  <p>${item.price}</p>
  <h3>${item.autor}</h3>
    </div>`;
        detail.style.display = "flex";
};
detail.onclick = () => {
    detail.style.display = "none";
}
}