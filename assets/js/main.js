
document.addEventListener('DOMContentLoaded', function () {
  // Радио переключатель
  console.log('Страница загружена.');
  startSelect.classList.add('radio_select');
  var radioContainer = document.getElementById('radio-container');
  radioContainer.addEventListener('change', function(event) {
    var startStory = document.getElementById('startStory')
    var resultStory = document.getElementById('resultStory')
    var startSelect = document.getElementById('startSelect')
    var resultSelect = document.getElementById('resultSelect')
    var selectedRadio = event.target;
    if (selectedRadio.value === "no") {
      startStory.classList.add('hidden')
      setTimeout(() => {
        startStory.classList.remove('hidden');
        resultStory.style.display = 'flex';
        startStory.style.display = 'none';
      }, 500);
      resultSelect.classList.add('radio_select');
      startSelect.classList.remove('radio_select');
    } else {
      resultStory.classList.add('hidden')
      setTimeout(() => {
        startStory.style.display = 'flex';
        resultStory.style.display = 'none';
        resultStory.classList.remove('hidden')
      }, 500);
      startSelect.classList.add('radio_select');
      resultSelect.classList.remove('radio_select');
    }
  });
  // Слайдер
  let splide = new Splide( '.splide',{
    type: 'loop',
    autoplay: 'true',
    interval: 3000,
    wheel: 'true',
    perPage: 1,
    perMove: 1,
    gap: '1rem',
    pagination: false,
    arrows: false,
    focus    : 'center',
		heightRatio: 0.5,
    pauseOnFocus: 'true',
    wheel: false,
} ).mount();
  btnNext.addEventListener('click', e => {
    splide.go('+1')
  })
  btnPrev.addEventListener('click', e => {
    splide.go('-1')
  });
  // Бургер меню
  burgerItem = document.querySelector('.burger__icon')
  burgerItem.addEventListener('click', function () {
    burgerItem.classList.toggle('active');
    var elementNav =document.querySelector('nav ul');
    console.log(elementNav)
    elementNav.classList.toggle('active__nav')
  });
  // Плавная прокрутка навигации
  const navLinks = document.querySelectorAll('nav ul li a, section a');
  navLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
      event.preventDefault(); // Предотвращаем стандартное действие ссылки
      
      const sectionId = link.getAttribute('href').substring(1); // Получаем идентификатор секции
      const section = document.getElementById(sectionId);
      
      if (section) {
        const offset = section.getBoundingClientRect().top + window.scrollY;
        
        window.scrollTo({
          top: offset,
          behavior: 'smooth'
        });
      }
    });
  });
  
});
// JavaScript для управления отображением модального окна
function openModal() {
  document.getElementById('myModal').style.display = 'flex';
}
function closeModal() {
  document.getElementById('myModal').style.display = 'none';
}