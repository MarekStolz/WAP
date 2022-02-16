let x = 200;
let y = 200;
let xspeed = 4;
let yspeed = -3;
let content = "Marek Stolz";
function setup() {
  createCanvas(windowWidth, windowHeight);
}

function draw() {
  background(0);
  textSize(50);
  textFont('assets/Bold.ttf');
  textStyle(BOLDITALIC);
  text(content, x, y, 50);

  if (x > width) {
    xspeed = xspeed * -1;
    fill(50, 255, 0);
  } else if (x < 0) {
    xspeed = xspeed * -1;
    fill(255, 100, 0);
  }

  if (y > height) {
    yspeed = yspeed * -1;
    fill(200, 0, 255);
  } else if (y < 0) {
    yspeed = yspeed * -1;
    fill(200, 6, 25);
  }

  x = x + xspeed;
  y = y + yspeed;
}
