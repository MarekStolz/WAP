function pridej()
{

    var txt = document.getElementById('txt').value,
        list = document.getElementById('list'),
        X = document.createElement("LI"),
        Y = document.createTextNode(txt);

     X.appendChild(Y);
     list.appendChild(X);
     document.getElementById("txt").value = "";
}

var input = document.getElementById("txt");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("myBtn").click();
  }
});
