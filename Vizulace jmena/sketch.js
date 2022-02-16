let x = 200;
let y = 200;
let xspeed = 4;
let yspeed = -3;
let content = "Marek Stolz";
function setup() {
  createCanvas(windowWidth, windowHeight);
}

function draw() {
  background(7, 40, 46);
  textSize(50);
  textStyle(BOLD);
  text(content, x, y, 50);

  if (x > width) {
    xspeed = xspeed * -1;
    let content = "Stolz";
    fill(0, 105, 252);
  } else if (x < 0) {
    content = "Stolz Marek";
    xspeed = xspeed * -1;
    fill(255, 255, 255);
  }

  if (y > height) {
    yspeed = yspeed * -1;
    content = "Marek";
    fill(196, 51, 222);
  } else if (y < 0) {
    let content = "Marek Stolz";
    yspeed = yspeed * -1;
    fill(255, 255, 255);
  }
  if (mouseIsPressed === true) {
    x = x - xspeed * 2;
    y = y + yspeed * 2;
  }
  x = x - xspeed;
  y = y + yspeed;
}
