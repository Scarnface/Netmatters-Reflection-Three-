$(document).ready(function () {
  if (localStorage.getItem("cookieSeen") != "shown") {
    // Calculate width of screen minus scroll bar width.
    var scrollBarWidth = window.innerWidth - document.body.offsetWidth;
    // Disable scrolling on page while modal open and adjust page for scroll bar.
    $("body").css({ marginRight: scrollBarWidth, overflow: "hidden" });
    // Display the cookie modal.
    $(".cookie-banner").css("display", "flex");
  }

  $(".cookieClose").click(function () {
    // Save the cookie acceptance to local storage.
    localStorage.setItem("cookieSeen", "shown");
    // Reset the scroll bar and page adjustment.
    $("body").css({ "margin-right": "", overflow: "visible" });
    // Hide the cookie modal.
    $(".cookie-banner").css("display", "none");
  });
});
