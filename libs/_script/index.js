"use strict";

function isDark() {
  if (window.matchMedia('(prefers-color-scheme)').matches) {
    return window.matchMedia('(prefers-color-scheme: dark)').matches;
  }
  return false;
}

function storageTheme() {
  var theme = localStorage.getItem('theme');
  if (theme == null) {
    theme = "light";
  } else {
    theme = isDark()? "dark": "light";
  }
  
  localStorage.setItem('theme', theme);
}

window.addEventListener('load', (event) => {
  storageTheme();
  var theme = localStorage.getItem('theme');
  if (theme == "dark") {
    document.body.classList.add('dark');
  } else {
    document.body.classList.remove('dark');
  }
});

