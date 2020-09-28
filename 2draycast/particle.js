class Particle{
    constructor(){
        this.pos = createVector(width / 2, height / 2);
        this.rays = [];
        for(let i = 0; i < 360; ++i){
            this.rays.push(new Ray(this.pos, radians(i)));
        }
    }

    update(x, y){
        this.pos.x = x;
        this.pos.y = y;

    }

    look(walls){
        for(let ray of this.rays){
            let closestWall = null;
            let closestDist = Infinity;
            for (let wall of walls){
                const point = ray.cast(wall);
                if(point){
                    const currDist = p5.Vector.dist(this.pos, point);
                    if(currDist < closestDist){
                        closestDist = currDist;
                        closestWall = point;
                    }
                }
            }
            if(closestWall){
                stroke(255, 80);
                line(this.pos.x, this.pos.y, closestWall.x, closestWall.y);
                //this.rays.push();
            }
        }
    }

    show(){
        fill(255);
        ellipse(this.pos.x, this.pos.y, 4);
    }
}