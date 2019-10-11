const frontPage = () => {
  console.log("import frontPage working !");
};

const bandeau_block = document.querySelectorAll(".bandeau_block");
bandeau_block.forEach(block => {
  block.addEventListener(
    "mouseover",
    function(event) {
      event.target.style.display = "none";
      const hover = event.target.parentNode.querySelector(".bandeau_hover");
      hover.style.display = "flex";
      hover.addEventListener("mouseleave", function(e) {
        e.target.style.display = "none";
        block.style.display = "flex";
      });
    },
    true
  );
});

export default frontPage;
