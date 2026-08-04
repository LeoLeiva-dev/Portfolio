const text = [
    "Full Stack Developer",
    "Laravel Developer",
    "PHP Developer",
    "Web Developer"
];

let textIndex = 0;
let charIndex = 0;

const typingElement =
document.getElementById("typing-text");

function typeText(){

    if(!typingElement) return;

    if(charIndex < text[textIndex].length){

        typingElement.textContent +=
        text[textIndex].charAt(charIndex);

        charIndex++;

        setTimeout(typeText, 100);

    }else{

        setTimeout(eraseText, 2000);

    }

}

function eraseText(){

    if(charIndex > 0){

        typingElement.textContent =
        text[textIndex].substring(0, charIndex - 1);

        charIndex--;

        setTimeout(eraseText, 50);

    }else{

        textIndex++;

        if(textIndex >= text.length){

            textIndex = 0;

        }

        setTimeout(typeText, 500);

    }

}

document.addEventListener(
'DOMContentLoaded',
typeText
);

const elements = document.querySelectorAll('.reveal');

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
            observer.unobserve(entry.target); // Se anima una sola vez
        }
    });
}, {
    threshold: 0.15
});

elements.forEach((element) => observer.observe(element));

