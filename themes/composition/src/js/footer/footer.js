const footer = () => {
  const horaires = document.querySelector(".heures-container.tablet-off")
    .innerHTML;

  document.querySelector(".heures-container.tablet-on").innerHTML = horaires;
};

export default footer;
