


function calculateSettingAsThemeString({ localStorageTheme, systemSettingDark }) {
    if (localStorageTheme !== null) {
      return localStorageTheme;
    }
  
    if (systemSettingDark.matches) {
      return "dark";
    }
  
    return "light";
  }

  
function changeTheme(currentTheme) {

  if  (currentThemeSetting == "light") {
    var newCta = newTheme = "dark";
    sun1.classList.add('hide');
    sun2.classList.add('hide');
    moon1.classList.remove('hide');
    moon2.classList.remove('hide');
    logolight1.classList.add('hide');
    logolight2.classList.add('hide');
    logodark1.classList.remove('hide');
    logodark2.classList.remove('hide');
  }
  else {
    var newCta = newTheme = "light";
    moon1.classList.add('hide');
    moon2.classList.add('hide');
    sun1.classList.remove('hide');
    sun2.classList.remove('hide');
    logodark1.classList.add('hide');
    logodark2.classList.add('hide');
    logolight1.classList.remove('hide');
    logolight2.classList.remove('hide');
  }
  var newCta = newTheme === "dark";
  document.querySelector("html").setAttribute("data-theme", newTheme);
  localStorage.setItem("theme", newTheme);
  currentThemeSetting = newTheme;
}
  
  const localStorageTheme = localStorage.getItem("theme");
  const systemSettingDark = window.matchMedia("(prefers-color-scheme: dark)");
  
  let currentThemeSetting = calculateSettingAsThemeString({ localStorageTheme, systemSettingDark });

let moon1 = document.getElementById("moon1");
let moon2 = document.getElementById("moon2");
let sun1 = document.getElementById("sun1");
let sun2 = document.getElementById("sun2");
let logolight1 = document.getElementById("logo-light1");
let logolight2 = document.getElementById("logo-light2");
let logodark1 = document.getElementById("logo-dark1");
let logodark2 = document.getElementById("logo-dark2");

let bod = document.getElementById("body");

const button = document.querySelector("[data-theme-toggle]");
button.addEventListener("click", () => {
  changeTheme(currentThemeSetting);
});

const button1 = document.querySelector("[data-theme-toggle1]");
button1.addEventListener("click", () => {
  changeTheme(currentThemeSetting);
});

if (currentThemeSetting == "light") {
  moon1.classList.add('hide');
  moon2.classList.add('hide');
  sun1.classList.remove('hide');
  sun2.classList.remove('hide');
  logodark1.classList.add('hide');
  logodark2.classList.add('hide');
  logolight1.classList.remove('hide');
  logolight2.classList.remove('hide');
  document.querySelector("html").setAttribute("data-theme", currentThemeSetting);
  setTimeout(() => {   bod.classList.add("body-transition"); }, 500);

}
else {
  sun1.classList.add('hide');
  sun2.classList.add('hide');
  moon1.classList.remove('hide');
  moon2.classList.remove('hide');
  logolight1.classList.add('hide');
  logolight2.classList.add('hide');
  logodark1.classList.remove('hide');
  logodark2.classList.remove('hide');
  document.querySelector("html").setAttribute("data-theme", currentThemeSetting);
  setTimeout(() => {   bod.classList.add("body-transition"); }, 500);
}