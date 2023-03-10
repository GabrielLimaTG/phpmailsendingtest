const sections = document.querySelectorAll('.section');
let currentSection = 0;
const button = document.querySelectorAll('.button');

function scrollFunction() {
  currentSection++; // increment the current section index
  console.log(currentSection);
  if (currentSection >= sections.length) {
    // if we have reached the last section, go back to the first section
    currentSection = 0;
  }
  sections[currentSection].scrollIntoView({ behavior: "smooth" }); // scroll to the next section
}

button.forEach((x) => {

    x.addEventListener('mouseover', () => setTimeout(scrollFunction,500));

});