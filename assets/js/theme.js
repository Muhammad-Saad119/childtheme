console.log("Theme.js loaded successfully");

function updateClipboard(newClip) {
  navigator.clipboard.writeText(newClip).then(
    () => {
      console.log("clipboard successfully set");
    },
    () => {
      /* clipboard write failed */
    }
  );
}

document.addEventListener("DOMContentLoaded", () => {
  // Select all buttons with class 'copy-btn'
  document.querySelectorAll(".copy-btn").forEach((button) => {
    button.addEventListener("click", (e) => {
      // Store the original button text
      const buttonText = e.target.textContent;

      // Prevent the default link behavior
      e.preventDefault();

      // Call the updateClipboard function whilst passing the "code" data attribute's value to it
      updateClipboard(e.target.dataset.code);

      // Change the button text
      e.target.textContent = "Copied!";

      // Restore the original button text after 2s
      setTimeout(() => {
        e.target.textContent = buttonText;
      }, 2000);
    });
  });
});

console.log("Js Loaded Successfully");

// Next Pervious Post V1

document.addEventListener("DOMContentLoaded", function () {
  const popup = document.getElementById("next-post-popup");
  const closeButton = popup.querySelector(".close-popup");
  const triggerHeight = 0.7;
  let scrolled = false;

  function checkScrollPosition() {
    const scrollPosition = window.scrollY + window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;

    if (scrollPosition / documentHeight >= triggerHeight && !scrolled) {
      popup.style.display = "block";
      setTimeout(() => {
        popup.style.opacity = 1;
        popup.style.transform = "translateY(0)";
      }, 10);
      scrolled = true;
    } else if (scrollPosition / documentHeight < triggerHeight && scrolled) {
      popup.style.opacity = 0;
      popup.style.transform = "translateY(20px)";
      setTimeout(() => (popup.style.display = "none"), 500);
      scrolled = false;
    }
  }

  closeButton.addEventListener("click", function () {
    popup.style.opacity = 0;
    popup.style.transform = "translateY(20px)";
    setTimeout(() => (popup.style.display = "none"), 500);
    scrolled = false;
  });
  window.addEventListener("scroll", checkScrollPosition);
});

/* Waterpipe Animation */
jQuery(document).ready(function ($) {
  $("#wavybg-wrapper").waterpipe({
    gradientStart: "#866DCB",
    gradientEnd: "#1C7AAE",
    smokeOpacity: 0.1,
    numCircles: 1,
    maxMaxRad: "auto",
    minMaxRad: "auto",
    minRadFactor: 0,
    iterations: 8,
    drawsPerFrame: 10,
    lineWidth: 2,
    speed: 1,
    bgColorInner: "#002258",
    bgColorOuter: "#00143A",
  });
});
