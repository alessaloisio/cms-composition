const slideContent = el => {
  let windowHeight = window.innerHeight;
  el.forEach(element => {
    let thisPos = element.getBoundingClientRect().top;
    if (thisPos - windowHeight <= 0) {
      if (element.classList.contains("slide-content-right")) {
        element.classList.add("slide-from-right");
      } else {
        element.classList.add("slide-from-left");
      }
    }
  });
};

export default slideContent;
