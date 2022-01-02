let mode = "light";
let dope = "funky";
document.getElementById("mode").onclick = () => {
  mode = mode == "light" ? "dark" : "light";
  event.target.innerText =
    mode == "light" ? "na tmavý režim" : "na světlý režim";

  document.getElementById("link-style").href = "css/" + mode + ".css";

  console.log("nastaveno na " + mode);
};

document.getElementById("dope").onclick = () => {
  dope = dope == "funky" ? "blue" : "funky";

  event.target.innerText =
    dope == "funky" ? "na modrý režim" : "na funky režim";

  document.getElementById("link-style").href = "css/" + dope + ".css";

  console.log("nastaveno na " + dope);
};
