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
    
    // //Hover Animation 
    // shape.addEventListener('mouseenter', () =>{
    //     shape.style.transform = 'translate3d(10px,10px,10px)';
    // });

    // //Hover Animation 
    // shape.addEventListener('mouseleave', () =>{
    //     shape.style.transform = 'translate3d(0px,0px,0px)';
    // });
});