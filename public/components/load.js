function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

const cards = document.querySelectorAll(".card");

function showCards() {
  cards.forEach((card) => {
    if (isInViewport(card)) {
      card.classList.add("show");
    }
  });
}

window.addEventListener("load", showCards);
window.addEventListener("scroll", showCards);

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.querySelector(".top-header").classList.add("minimize");
  } else {
    document.querySelector(".top-header").classList.remove("minimize");
  }
}
