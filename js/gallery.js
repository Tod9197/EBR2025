// ギャラリータブ切り替え
document.addEventListener("DOMContentLoaded", function () {
  const galleryButton2024 = document.getElementById("js-gallery-tab2024");
  const galleryButton2023 = document.getElementById("js-gallery-tab2023");
  const galleryTab2024 = document.getElementById("js-gallery2024");
  const galleryTab2023 = document.getElementById("js-gallery2023");

  galleryButton2024.addEventListener("click", function () {
    galleryTab2024.classList.add("-show");
    galleryTab2024.classList.remove("-off");
    galleryTab2023.classList.remove("-show");
    galleryTab2023.classList.add("-off");
  });

  galleryButton2023.addEventListener("click", function () {
    galleryTab2023.classList.add("-show");
    galleryTab2023.classList.remove("-off");
    galleryTab2024.classList.remove("-show");
    galleryTab2024.classList.add("-off");
  });
});
