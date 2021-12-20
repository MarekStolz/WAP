window.onscroll = () => {
console.log(window.onscrollY);
//document.getElementById("L1").style.top = window.scrollY * -0.35 + "px";
document.getElementById("L2").style.top = window.scrollY * 0.6 + "px";
document.getElementById("L3").style.top = window.scrollY * 0.3 + "px";
document.getElementById("L4").style.top = window.scrollY * 0.2 + "px";
document.getElementById("L5").style.top = window.scrollY * -0.15 + "px";
};