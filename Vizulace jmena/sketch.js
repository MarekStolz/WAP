let x = 200;
let y = 200;
let xspeed = 4;
let yspeed = -3;
let r = 7;
let b = 47;
let g = 48;
let content = "MAREK STOLZ";
function setup() {
  createCanvas(windowWidth, windowHeight);
}

function draw() {
  textSize(150);
  textStyle(BOLD);
  noStroke();
  text(content, x, y, 50);
  background(r, b, g, 100);

  if (x > width) {
    xspeed = xspeed * -1;
    let content = "STOLZ";
    fill(0, 105, 252);
  } else if (x < 0) {
    content = "STOLZ MAREK";
    xspeed = xspeed * -1;
    fill(255, 255, 255);
  }

  if (y > height) {
    yspeed = yspeed * -1;
    content = "MAREK";
    fill(0);
  } else if (y < 0) {
    let content = "MAREK STOLZ";
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
