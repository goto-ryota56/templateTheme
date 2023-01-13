// 360px未満はviewportを固定
const viewport = document.querySelector('meta[name="viewport"]');
function switchViewport() {
  const value = window.outerWidth > 370 ? "width=device-width,initial-scale=1" : "width=370";
  if (viewport.getAttribute("content") !== value) {
    viewport.setAttribute("content", value);
  }
}
addEventListener("resize", switchViewport, false);
switchViewport();

