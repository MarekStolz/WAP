function setup() {
    createCanvas(710, 400);
  
    background(0);
  }
  
  function draw() {
    stroke(255);
    if (mouseIsPressed === true) {
      line(mouseX, mouseY, pmouseX, pmouseY);
    }
  }
  