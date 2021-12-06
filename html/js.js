function updateTable() {
    form.onsubmit = (e) => {
      e.preventDefault();
    var values = {
      age: document.getElementById("age").value,
      book: document.getElementById("book").value,
     
    };
  
    var table = document.getElementById("table");
  
    Object.keys(values).forEach(function (key) {
      table.getElementsByClassName(key + "Row")[0]
        .getElementsByClassName("value")[0]
        .textContent = values[key];
    });
  }
  }
  document.getElementById("button").addEventListener("click", updateTable);