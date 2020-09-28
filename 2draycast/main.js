let walls = [];
let particle;

function setup(){
    createCanvas(400, 400);
    for(let i = 0; i < 5; ++i){
        let x1 = random(width);
        let x2 = random(width);
        let y1 = random(height);
        let y2 = random(height);
        walls[i] = new Wall(x1, y1, x2, y2);
    }

    // NOTE(Jovan): Adding world boundaries
    walls.push(new Wall(0, 0, width, 0));
    walls.push(new Wall(width, 0, width, height));
    walls.push(new Wall(width, height, 0, height));
    walls.push(new Wall(0, height, 0, 0));

    particle = new Particle();
}

function draw(){
    background(0);
    for(let wall of walls){
        wall.show();
    }
    particle.update(mouseX, mouseY);
    particle.show();
    particle.look(walls);
}