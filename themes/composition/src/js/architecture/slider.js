const sliderDiaporama = () => {
  const sliders = Array.from(document.querySelectorAll("#slider-diaporama"));

  // Disponible que pour la page d'architecte intérieur
  if (sliders) {
    sliders.map(slider => {
      let current = 0;

      const next = slider.parentNode.querySelector("#nav-diaporama .next");
      const previous = slider.parentNode.querySelector(
        "#nav-diaporama .previous"
      );
      const posts = Array.from(slider.querySelectorAll(".post"));

      const handleNext = () => {
        if (current < posts.length - 1) {
          current++;
          posts.map(post => {
            post.style.transform = `translateX(${current *
              -slider.clientWidth}px)`;
          });
        }
      };

      const handlePrevious = () => {
        if (current > 0) {
          current--;
          posts.map(post => {
            post.style.transform = `translateX(${current *
              -slider.clientWidth}px)`;
          });
        }
      };

      next.addEventListener("click", handleNext);
      previous.addEventListener("click", handlePrevious);
    });
  }
};

export default sliderDiaporama;
