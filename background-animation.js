const backgroundShapes = document.querySelector('.background-shapes');
const numShapes = 200; // Adjust the number of shapes

for (let i = 0; i < numShapes; i++) {
    const shape = document.createElement('div');
    shape.className = 'random-shape';
    backgroundShapes.appendChild(shape);
}

const randomShapes = document.querySelectorAll('.random-shape');

randomShapes.forEach((shape) => {
    const randomX = Math.random() * (window.innerWidth - shape.clientWidth); // Adjusted X position range
    const randomY = Math.random() * (window.innerHeight - shape.clientHeight); // Adjusted Y position range

    shape.style.left = `${randomX}px`;
    shape.style.top = `${randomY}px`;

    // Add falling animation
    shape.style.animationDuration = `${Math.random() * 5 + 5}s`; // Random duration between 5s and 10s
    
});

document.addEventListener('mousemove', (e) => {
    const mouseX = e.clientX;
    const mouseY = e.clientY;

    randomShapes.forEach((shape) => {
        const shapeX = parseInt(shape.style.left);
        const shapeY = parseInt(shape.style.top);

        const distance = Math.sqrt((shapeX - mouseX) ** 2 + (shapeY - mouseY) ** 2);

        // Detect hovering within 5px radius
        if (distance < 5) {
            shape.style.backgroundColor = `rgb(${Math.random() * 255}, ${Math.random() * 255}, ${Math.random() * 255})`;
        } else {
            shape.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
        }
    });
});
