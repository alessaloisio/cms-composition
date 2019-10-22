const showContent = el => {
  let windowHeight = window.innerHeight;
  el.forEach(element => {
    let thisPos = element.getBoundingClientRect().top;
    if (thisPos - windowHeight <= 0) {
      element.classList.add("fade-in");
    }
  });
};

export default showContent;
