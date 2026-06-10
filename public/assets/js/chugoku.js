document.addEventListener('DOMContentLoaded', function () {
  const backTop = document.querySelector('.back-top');
  if (backTop) {
    backTop.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }
});