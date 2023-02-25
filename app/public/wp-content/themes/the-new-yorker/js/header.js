// Resizes menu on scroll
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    (document.body.scrollTop > 200 && window.innerWidth > 960) ||
    (document.documentElement.scrollTop > 200 && window.innerWidth > 960)
  ) {
    document.getElementById("logo").style.width = "128px";
    document.getElementById("menu").style.display = "none";
    document.getElementById("hero-offer").style.opacity = "1";
  } else {
    document.getElementById("logo").style.width = "300px";
    document.getElementById("menu").style.display = "block";
    document.getElementById("hero-offer").style.opacity = "0";
  }
}

// Operates burger menu
window.onload = function () {
  const menuBtn = document.querySelector(".hamburger");
  const mobileMenu = document.querySelector(".mobile-navigation-menu");

  menuBtn.addEventListener("click", function () {
    menuBtn.classList.toggle("is-active");
    mobileMenu.classList.toggle("is-active");
  });
};
