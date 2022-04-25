// Смена цветовой гаммы хедера
window.addEventListener('scroll', () => {
  if (window.scrollY > 0) header.classList.add('header-compressed');
  else header.classList.remove('header-compressed');
});
