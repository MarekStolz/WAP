const words = []

function setup() {
    createCanvas(innerWidth, innerHeight)
    background(0)

    const str = 'Marek Stolz'
    const wordsStr = str.split(' ')

    textSize(100)

    
    let x = 20
    let y = 60
    fill(255)
    // iterate over each word
    for (let i = 0; i < wordsStr.length; i++) {
        const wordStr = wordsStr[i] // get current word
        const wordStrWidth = textWidth(wordStr) // get current word width
        const word = new Word(wordStr, x, y, i)
        words.push(word)
        x = x + wordStrWidth + textWidth(' ') // update x by word width + space character
        // look ahead the next word - will it fit in the space? if not, line break
        const nextWordStrWidth = textWidth(wordsStr[i+1]) || 0
        if (x > width - nextWordStrWidth) {
            y += 40 // line height, sort of
            x = 20 // reset x position
        }
    }
}

function draw() {
    background(0)

    for (let i = 0; i < words.length; i++) {
        const word = words[i] // retrieve word object
        word.update()
        word.display()
    }
}

function mousePressed() {
    for (let i = 0; i < words.length; i++) {
        const word = words[i]
        word.spread()
    }
}

class Word {
    constructor(word, x, y, idx) {
        this.word = word
        this.x = x
        this.y = y
        // target position is the same as current position at start
        this.tx = this.x
        this.ty = this.y
        this.idx = idx
        this.fcolor = color(255)
    }

    spread() {
        this.tx = random(width)
        this.ty = random(height)
    }

    update() {
        // move towards the target by 10% each time
        this.x = lerp(this.x, this.tx, 0.1)
        this.y = lerp(this.y, this.ty, 0.1)
    }

    display() {
        fill(this.fcolor)
        noStroke()
        text(this.word, this.x, this.y)
    }
}