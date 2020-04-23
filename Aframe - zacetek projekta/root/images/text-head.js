const body = document.querySelector('body');
const scene = document.querySelector('a-scene');
const mikroplazma = ""
const gonoreja = ""
const sifilis = ""
const klamidija = ""
const trihomonoza = ""
const hivAids = ""
const hepatitis = ""
const papiloma = ""
const herpes = ""

let number = 1;

function processText(text, position, rotation) {
    let textArr = text.split('\n');
    let lines = [];
    for(let j = 0; j < textArr.length; j++) {
        let characters = false, lineLength = 40;
        let textSplit = textArr[j].split(' ');
        if(textSplit.length <= 1) {
            textSplit = textArr[j].split('');
            characters = true;
            lineLength = 30;
        }
        let line = '';
        for(let i = 0; i < textSplit.length; i++) {
            if(line.length < lineLength) {
                characters ? line += textSplit[i] : line += textSplit[i] + ' ';
                if(i == textSplit.length - 1) {
                    lines.push(line.trim());
                    line = '';
                }
            } else {
                lines.push(line.trim());
                line = '';
                characters ? line += textSplit[i] : line += textSplit[i] + ' ';
            }
        }
        if(j < textArr.length - 1) {
            lines.push(' ');
        }
    }

    let throwawayCanvas = document.createElement('canvas');
    throwawayCanvas.height = 1000;
    throwawayCanvas.width = 1000;
    throwawayCanvas.setAttribute('style', 'display: none');
    throwawayCanvas.setAttribute('id', 'throwaway');

    let context = throwawayCanvas.getContext('2d');
    context.fillStyle = 'transparent'; // rgba(36, 35, 35, 0.5) rgba(255, 255, 255, 0.5)
    context.fillRect(0, 0, throwawayCanvas.width, throwawayCanvas.height);
    context.fillStyle = 'white';
    context.font = '12px Arial';
    let y = 30;
    let width = 0;
    for(let i = 0; i < lines.length; i++) {
        context.fillText(lines[i], 20, y);
        y += 20;
        context.measureText(lines[i]).width > width ? width = context.measureText(lines[i]).width : width = width;
    }

    let canvas = document.createElement('canvas');
    canvas.height = y;
    canvas.width = Math.round(width + 40);
    canvas.setAttribute('style', 'display: none');
    canvas.setAttribute('id', 'textCanvas'+number);
    let ctx = canvas.getContext('2d');
    ctx.drawImage(throwawayCanvas, 0, 0);
    body.appendChild(canvas);

    let plane = document.createElement('a-plane');
    plane.setAttribute('material', 'color: #fff; src: #textCanvas'+number+'; transparent: true');
    plane.setAttribute('width', canvas.width / 50);
    plane.setAttribute('height', canvas.height / 50);
    plane.setAttribute('position', position);
    plane.setAttribute('rotation', rotation);
    plane.setAttribute('class', 'texT'+number);
    scene.appendChild(plane);
    number++;
}
//      processText(georgianText, '0 1 8', '0 180 0');


processText(mikroplazma, '-7.863 -2.135 -2.49', '-10 73.28 0');
processText(gonoreja, '-7.202 -1.517 -4.563', '-10 55.22 0');
processText(sifilis, '-4.917 -1.564 -6.198', '-10 36.44 0');
processText(klamidija, '-2.727 -0.992 -7.626', '-10 16.16 0');
processText(trihomonoza, '0.121 -0.377 -8.314', '-10 0 0');
processText(hivAids, '2.401 -0.671 -7.762', '-10 -17.74 0');
processText(hepatitis, '3.912 -0.785 -6.492', '-10 -34.78 0');
processText(papiloma, '6.240 -0.411 -4.929', '-10 -55.02 0');
processText(herpes, '7.554 -0.291 -2.556', '-10 -72.72 0');