const tooltip = tippy('[data-tippy-content]', {
  allowHTML: true,
  maxWidth: 320,
  placement: 'right',
  theme: 'clean',
});

const forms = document.querySelectorAll('form');
forms.forEach(form => new Form(form));
