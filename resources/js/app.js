// Js for the dropdown menu untuk sub menu
document.querySelectorAll(".submenu-toggle").forEach((button) => {
  button.addEventListener("click", function (event) {
    event.stopPropagation();
    document.querySelectorAll(".submenu-list").forEach((submenu) => {
      if (submenu !== this.nextElementSibling) {
        submenu.style.display = "none";
      }
    });
    const submenu = this.nextElementSibling;
    submenu.style.display =
      submenu.style.display === "block" ? "none" : "block";
  });
});
document.addEventListener("click", function () {
  document.querySelectorAll(".submenu-list").forEach((submenu) => {
    submenu.style.display = "none";
  });
});
// Js for the dropdown menu untuk sub menu

// Js untuk sub menu agar mengikuti menu jika discroll
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".nav-item.submenu").forEach((item) => {
    let submenu = item.querySelector("ul");
    if (submenu) {
      item.addEventListener("mouseenter", () => {
        let rect = item.getBoundingClientRect();
        submenu.style.left = `${rect.left}px`;
        submenu.style.top = `${rect.bottom}px`;
      });
    }
  });
});
// Js untuk sub menu agar mengikuti menu jika discroll

// Waktu
window.addEventListener("load", () => {
  clock();
  function clock() {
    const today = new Date();
    const hours = today.getHours();
    const minutes = today.getMinutes();
    const seconds = today.getSeconds();
    
    const hour = hours < 10 ? "0" + hours : hours;
    const minute = minutes < 10 ? "0" + minutes : minutes;
    const second = seconds < 10 ? "0" + seconds : seconds;

    const month = today.getMonth();
    const year = today.getFullYear();
    const day = today.getDate();

    const monthList = [
      "Januari",
      "Februari",
      "Maret",
      "April",
      "Mei",
      "Juni",
      "Juli",
      "Agustus",
      "September",
      "Oktober",
      "November",
      "Desember",
    ];

    const date = day + " " + monthList[month] + " " + year;
    const time = hour + ":" + minute + ":" + second;

    const dateTime = date + " - " + time;

    document.getElementById("date-time").innerHTML = dateTime;
    setTimeout(clock, 1000);
  }
});