let data = [];
let form = document.getElementById("form");
form.onsubmit = (e) => {
    e.preventDefault();
    let age = document.getElementById("age").value;
    let books = document.getElementById("book").value;
    data.push({a:age, b:books});
    console.log(data);
    
    let table = document.createElement("table");
    table.style.borderCollapse = "collapse";
    for (let row of data) {
        console.log(row.a, row.b);
    }
}
