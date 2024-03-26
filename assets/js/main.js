
document.addEventListener('DOMContentLoaded', function () {
  // Радио переключатель

  function showResultStory() {
    var startStory = document.getElementById('startStory')
    var resultStory = document.getElementById('resultStory')
    startStory.classList.add('hidden');
  
    setTimeout(() => {
      startStory.classList.remove('hidden');
      resultStory.style.display = 'flex';
      startStory.style.display = 'none';
    }, 500);
  
    resultSelect.classList.add('radio_select');
    startSelect.classList.remove('radio_select');
  };
  function showStartStory() {
    var startSelect = document.getElementById('startSelect')
    var resultSelect = document.getElementById('resultSelect')
    resultStory.classList.add('hidden')
      setTimeout(() => {
        startStory.style.display = 'flex';
        resultStory.style.display = 'none';
        resultStory.classList.remove('hidden')
      }, 500);
      startSelect.classList.add('radio_select');
      resultSelect.classList.remove('radio_select');
  };

  console.log('Страница загружена.');
  startSelect.classList.add('radio_select');
  var resultContainer = document.getElementById('resultSelect');
  var startContainer = document.getElementById('startSelect');
  startContainer.addEventListener('click', function() {
      showStartStory();
  });
  resultContainer.addEventListener('click', function() {
      showResultStory();
  });

  var nowButton =  document.querySelector('#nowButton');
  nowButton.addEventListener('click', function () {
    showResultStory();
  })
  var beginnerButton = document.querySelector('#beginnerButton');
  beginnerButton.addEventListener('click', function () {
    showStartStory();
  })
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
  const navLinks = document.querySelectorAll('nav ul li a, .image_container__inner__button a');
  navLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
      event.preventDefault(); // Предотвращаем стандартное действие ссылки
      
      const sectionId = link.getAttribute('href').substring(1); // Получаем идентификатор секции
      const section = document.getElementById(sectionId);
      const targetElement = document.getElementById('item_reviews1');

      if (link === document.querySelector('li a[href="#item_reviews"]')) {
        if (targetElement) {
          showResultStory();
          setTimeout(function() {
            // Прокручиваем к элементу с использованием плавной анимации
            targetElement.scrollIntoView({ behavior: 'smooth' });
          }, 500);
        };
      };

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
  // Адаптивное окно по высоте
    var modalContent = document.querySelector('.modal_content');
    var windowHeight = window.innerHeight;
    var contentHeight = modalContent.clientHeight;
    if (contentHeight > windowHeight) {
        modalContent.style.height = '90%';
    }
}
function closeModal() {
  document.getElementById('myModal').style.display = 'none';
}
document.addEventListener("DOMContentLoaded", function () {
  var input = document.querySelector("#phone");
    var iti = window.intlTelInput(input, {
    initialCountry: "auto",
    nationalMode: false,

    geoIpLookup: callback => {
    fetch("https://ipapi.co/json")
      .then(res => res.json())
      .then(data => callback(data.country_code))
      .catch(() => callback("us"));
    },
    utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/utils.js",
  });
  
  document.querySelector('.contacts__form').addEventListener('submit', function (e) {
    e.preventDefault();
    var action = this.getAttribute('action');
    var th = this;
    var formData = new FormData(th);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', action, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log('Отправлено!');
        }
    };
    function showPopup() {
      document.getElementById('popup').style.display = 'block';
      document.getElementById('overlay').style.display = 'block';
    };
    const isValid = iti.isValidNumber();
    var imageInput = document.getElementById('petPhoto');
    console.log(isValid);
    // Если номер телефона верный то присваиваем и отправляем заявку
    if (isValid) {
      input.value = iti.getNumber(intlTelInputUtils.numberFormat.E164);
      console.log(input.value);
      input.style.border = 'none';
      var additionalContent = document.querySelector('#fileName')
      if (imageInput.files.length !== 0) {
        var fileSizeInBytes = imageInput.files[0].size;
        var maxSizeInBytes = 25 * 1024 * 1024; // 25 мегабайт
        // Проверяем размер файла
        if (fileSizeInBytes > maxSizeInBytes) {
          // Если файл больше 25 мегабайт, очищаем поле ввода
          imageInput.value = ''; // Очищаем значение
          alert('The selected file is too large. Please select a file less than 25 MB in size.');
        } else {
          console.log('Изображение выбрано');
          xhr.send(formData);
          additionalContent.innerText = '';
          document.forms[0].reset();
          showPopup();
        }
      } else {
        // Код для выполнения, если изображение не выбрано
        console.log('Изображение не выбрано');
        xhr.send(formData);
        additionalContent.innerText = '';
        document.forms[0].reset();
        showPopup();
      };
    } else {
      input.value = iti.getNumber(intlTelInputUtils.numberFormat.E164);
      input.style.border = '1px solid red';
      console.log('зашли если не правильно');
    };
    });
});
function closePopup() {
  document.getElementById('popup').style.display = 'none';
  document.getElementById('overlay').style.display = 'none';
}
 // Добавление слушателя событий для поля выбора файла
 document.getElementById('petPhoto').addEventListener('change', function() {
  previewImage();
});
var additionalContent = document.querySelector('#fileName')
// Функция для предварительного просмотра загруженного фото
function previewImage() {
  // Получение элемента для выбора файла
  var fileInput = document.getElementById('petPhoto');

  // Получение выбранного файла
  var file = fileInput.files[0];

  // Проверка наличия выбранного файла
  if (file) {
      // Создание объекта FileReader для чтения содержимого файла
      var reader = new FileReader();

      // Установка функции обратного вызова для обработки успешного чтения файла
      reader.onload = function(e) {
          // Вывод имени файла в консоль и обновление статуса
          additionalContent.innerText = file.name;
      };

      // Чтение содержимого файла в формате Data URL
      reader.readAsDataURL(file);
  } 
}

class ShareButton {
  constructor(element) {
      this.element = element;
      this.network = this.element.getAttribute('data-network');
      this.url = "https://mypawscharity.info";
      this.imageURL = "https://mypawscharity.info/wp-content/themes/myThemes/assets/images/pet_food.png";
      this.element.addEventListener('click', () => this.share());
  }

  share() {
      switch (this.network) {
          case 'facebook':
              this.shareOnFacebook();
              break;
          case 'twitter':
              this.shareOnTwitter();
              break;
          case 'linkedin':
              this.shareOnLinkedIn();
              break;
          case 'pinterest':
              this.shareOnPinterest();
              break;
          case 'instagram':
              this.shareOnInstagram();
              break;
          default:
              console.error('Неподдерживаемая социальная сеть');
      }
  }

  shareOnFacebook() {
      // URL, который вы хотите поделиться
      var shareUrl = encodeURIComponent(this.url);

      // Открываем диалоговое окно для создания поста на Facebook
      window.open("https://www.facebook.com/sharer/sharer.php?u=" + shareUrl, '_blank');
  }

  shareOnTwitter() {
      // URL, который вы хотите поделиться
      var shareUrl = encodeURIComponent(this.url);

      // Сформируйте URL для Twitter
      var twitterUrl = "https://twitter.com/intent/tweet?url=" + shareUrl;

      // Откройте новое окно браузера для создания твита
      window.open(twitterUrl, '_blank');
  }

  shareOnLinkedIn() {
      // URL, который вы хотите поделиться
      var shareUrl = encodeURIComponent(this.url);

      // Сформируйте URL для LinkedIn
      var linkedInUrl = "https://www.linkedin.com/sharing/share-offsite/?url=" + shareUrl;

      // Откройте новое окно браузера для создания поста на LinkedIn
      window.open(linkedInUrl, '_blank');
  }

  shareOnPinterest() {
      // URL, который вы хотите поделиться
      var shareUrl = encodeURIComponent(this.url);

      // URL изображения, которое вы хотите показать на Pinterest
      var imageUrl = encodeURIComponent(this.imageURL);

      // Сформируйте URL для Pinterest
      var pinterestUrl = "https://pinterest.com/pin/create/button/?url=" + shareUrl + "&media=" + imageUrl;

      // Откройте новое окно браузера для создания поста на Pinterest
      window.open(pinterestUrl, '_blank');
  }

  handleResponse(response) {
      if (response && !response.error_code) {
          console.log('Пост успешно опубликован.');
      } else {
          console.error('Ошибка при публикации поста: ' + response.error_message);
      }
  }
}

// Инициализация кнопок "Поделиться"
document.querySelectorAll('.share-button').forEach(button => new ShareButton(button));

document.querySelector('.modal_content').addEventListener('touchmove', function(event) {
  event.preventDefault(); // Остановить стандартный скролл
  var touch = event.touches[0]; // Получить данные о касании
  this.scrollTop = this.scrollTop + touch.pageY; // Прокрутить содержимое вниз
});

document.querySelector('.footer__top__left').addEventListener('click', function() {
  document.getElementById('map-link').click();
});

