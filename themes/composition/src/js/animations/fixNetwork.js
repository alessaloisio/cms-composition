const fixNetwork = el => {
  let networksContainer = document.querySelector(".post-thumbnail .networks");

  if (networksContainer === null) return;

  let blackBlock = document.querySelector(".block-black");
  let blockContent = document.querySelector(".block-content");
  let fixed;
  checkPos();

  window.addEventListener("scroll", () => {
    checkPos();
  });

  function checkPos() {
    let thisPos = blackBlock.getBoundingClientRect().top;
    let posBlockContent = blockContent.getBoundingClientRect().bottom;
    let posNetworks = networksContainer.getBoundingClientRect().bottom;

    //console.log(thisPos);
    if (thisPos < -478) {
      // magic number!!
      if (posBlockContent - posNetworks < 1) {
        networksContainer.style.opacity = "0";
      } else {
        networksContainer.style.opacity = "1";
      }
      if (!fixed) {
        networksContainer.style.position = "fixed";
        networksContainer.style.top = "147px";
        fixed = true;
      }
    } else if (thisPos > -478) {
      if (fixed) {
        networksContainer.style.position = "absolute";
        networksContainer.style.top = "540px";
        fixed = false;
      }
    }
  }
};

export default fixNetwork;
