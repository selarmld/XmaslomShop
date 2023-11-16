const toggleThemeButton = document.getElementById("toggleThemeButton");
const themeIcon = document.getElementById("themeIcon");
const body = document.body;
const navbar = document.querySelector(".navbar");
const homeSection = document.querySelector(".home");

function toggleTheme() {
  if (body.classList.contains("dark-mode")) {
    body.classList.remove("dark-mode");
    themeIcon.classList.remove("fa-moon");
    themeIcon.classList.add("fa-sun");
    navbar.style.color = "#222";
    homeSection.style.backgroundColor = "transparent";
  } else {
    body.classList.add("dark-mode");
    themeIcon.classList.remove("fa-sun");
    themeIcon.classList.add("fa-moon");
    navbar.style.color = "#fff";
    homeSection.style.backgroundColor = "#222";
    homeSection.style.backgroundColor = "transparent";
  }
}

toggleThemeButton.addEventListener("click", toggleTheme);
