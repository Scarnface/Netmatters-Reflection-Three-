$(document).ready(function () {
  //Load the slick carousel and apply the required options.
  $(".carousel").slick({
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    dots: true,
  });

  // Switch between the grab and default styling on mouse down/up.
  $(".services-gallery").mousedown(function () {
    $(".services-gallery").css("cursor", "grab");
  });

  $(".services-gallery").mouseup(function () {
    $(".services-gallery").css("cursor", "default");
  });
});
