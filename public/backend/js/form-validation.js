document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".needs-validation");
  if (!form) return;

  form.addEventListener("submit", function (event) {
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }
    form.classList.add("was-validated");
  }, false);
});

// Initialize Select2 if exists
$(document).ready(function () {
  if ($('.select2').length) {
    $('.select2').select2({
      width: '100%'
    });
  }
});