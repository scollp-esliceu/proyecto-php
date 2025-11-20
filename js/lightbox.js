document.addEventListener("DOMContentLoaded", function () {
    const lightbox    = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const btnPrev     = document.querySelector(".lb-prev");
    const btnNext     = document.querySelector(".lb-next");
    const images      = Array.from(document.querySelectorAll(".galeria .png"));
    const btnClose    = document.querySelector(".lb-close");

    btnClose.addEventListener("click", (e) => {
        e.stopPropagation();
        lightbox.classList.remove("active");
        lightboxImg.src = "";
    });



    let currentIndex = 0;

    function showImage(index) {
        if (images.length === 0) return;

        if (index < 0) index = images.length - 1;
        if (index >= images.length) index = 0;

        currentIndex = index;
        const img = images[currentIndex];
        const fullSrc = img.dataset.full || img.src;

        lightboxImg.src = fullSrc;
        lightbox.classList.add("active");
    }

    images.forEach((img, index) => {
        img.addEventListener("click", () => {
            showImage(index);
        });
    });

    btnPrev.addEventListener("click", (e) => {
        e.stopPropagation();
        showImage(currentIndex - 1);
    });

    btnNext.addEventListener("click", (e) => {
        e.stopPropagation();
        showImage(currentIndex + 1);
    });

    lightbox.addEventListener("click", (e) => {
        if (e.target === lightbox) {
            lightbox.classList.remove("active");
            lightboxImg.src = "";
        }
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            lightbox.classList.remove("active");
            lightboxImg.src = "";
        }
        if (e.key === "ArrowLeft") {
            showImage(currentIndex - 1);
        }
        if (e.key === "ArrowRight") {
            showImage(currentIndex + 1);
        }
    });
});