// Смена цветовой гаммы хедера
window.addEventListener('scroll', () => {
  if (window.scrollY > 0) header.classList.add('header-compressed');
  else header.classList.remove('header-compressed');
});


/*
--------------------------------------------------------
            СКРИПТ ВЫПАДАЮЩИХ СПИСКОВ
--------------------------------------------------------
*/

const headerDropdown = header.querySelectorAll('.nav__list .dropdown__header');

let scrollPosition = window.pageYOffset;
headerDropdown.forEach(dropdown => {

  // Открытие дропдаунов и закрытие при клике не по ним
  dropdown.addEventListener('click', () => dropdown.parentNode.classList.toggle(StyleСlass.header.dropdown.open));
  window.addEventListener('click',
    (e) => {
      if (!dropdown.parentNode.contains(e.target)) dropdown.parentNode.classList.remove(StyleСlass.header.dropdown.open);
    });

  // Скрытие их при скролле
  window.addEventListener('scroll',
    () => {
      scrollPosition = window.pageYOffset;
      if (scrollPosition >= 150) dropdown.parentNode.classList.remove(StyleСlass.header.dropdown.open);
    });
})
