let objects = [
  { class: "bomb", value: -20 },
  { class: "clock", value: 15 },
  { class: "bottle-green", value: 10 },
  { class: "bottle-purple", value: 20 },
  { class: "start", value: 50 },
  { class: "rock", value: 0 },
];

let cajasXnivel = [8, 9, 10];
let seconds = 10;

function randomInt(min, max) {
  // min and max incluido
  return Math.floor(Math.random() * (max - min + 1) + min);
}

// se define la cantidad máxima por nivel con ayuda del arreglo cajasXnivel
let cantRandom = cajasXnivel[Math.floor(Math.random() * cajasXnivel.length)];
console.log("cajas máximas " + cantRandom);

function crearCajas(boxes) {
  for (let index = 0; index < boxes; index++) {
    let box = document.createElement("div");
    box.id = "box" + index;
    box.classList.add("box");
    document.querySelector("#boxes").appendChild(box);
    if (randomInt(1, 30) % 2 == 0) {
      let items = randomInt(1, 5);
      for (let pos = 0; pos < items; pos++) {
        let item = document.createElement("div");
        item.id = "item" + index + "-" + pos;
        item.classList.add("box");
        if (pos == 0) {
          let articulo = randomInt(0, 5);
          item.classList.add(objects[articulo].class);
          item.points = objects[articulo].value;

          item.cambio = objects[articulo].class;

          item.hasClick = true;

        } else {
          item.classList.add("wood-box");
        }

        document.querySelector("#box" + index).appendChild(item);
        
        if (item.hasClick) {
          document.querySelector("#item" + index + "-" + pos).addEventListener("click", function () {
              let score = Number(document.querySelector("#score").textContent) + this.points;
              document.querySelector("#score").textContent = score;
              this.classList.remove(this.cambio);
              let articulo = randomInt(0, 5);
              this.classList.add(objects[articulo].class);
              this.points = objects[articulo].value;
              this.cambio = objects[articulo].class;
            });
        }
      }
    }
  }
}

function timer() {
  document.querySelector('#timer').innerHTML = seconds;
  if (seconds == 0) {
    alert('Se terminó el tiempo.');

  } else {
    seconds--;
    setTimeout('timer()', 1000);
  }
}

function init() {
    
    crearCajas(cantRandom);
    timer();

    setTimeout(() => {  
      window.location.reload();
    }, 11000);

}

document.addEventListener("DOMContentLoaded", function () {
  init();
});
