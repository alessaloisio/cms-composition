const bandeau_block = document.querySelectorAll(".bandeau_block");

const onHover = (event) => {

  const childs = Array.from(event.target.childNodes);

  childs.map(child => {
    if(child.nodeName !== "#text"){
      if(child.classList.contains("part1")) 
        child.classList.remove("active");

      if(child.classList.contains("part2"))
        child.classList.add("active");
    }
  });
      
};

const onLeave = event => {
  
  const childs = Array.from(event.target.childNodes);

  childs.map(child => {
    if(child.nodeName !== "#text"){
      if(child.classList.contains("part1"))
        child.classList.add("active");

      if(child.classList.contains("part2")) 
        child.classList.remove("active");
    }
  });
  
};

bandeau_block.forEach(block => {
  block.addEventListener("mouseenter", e => onHover(e));
  block.addEventListener("mouseleave", e => onLeave(e))
});