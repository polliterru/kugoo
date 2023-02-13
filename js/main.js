document.addEventListener('DOMContentLoaded', () => {
  const headerNav = document.querySelector('.js-header-nav')
  const burgerMenu = document.querySelector('.js-burger-menu')
  const closeBtn = document.querySelector('.js-header-nav-close')
  const navItems = headerNav.querySelectorAll('.header-nav-item')

  navItems.forEach(item => {
    item.addEventListener('click', () => {
      headerNav.classList.remove('active')
    })
  })

  burgerMenu.addEventListener('click', () => {
    headerNav.classList.add('active')
  })

  closeBtn.addEventListener('click', () => {
    headerNav.classList.remove('active')
  })
})

// глобальный объект события открытия модального окна
const modalOpenEvents = {
  target: null
}
// ф-я открытия модалки
const openModal = (modalClassName) => {
  const selector = `.${modalClassName}`
  const modal = document.querySelector(selector)

  if (modal) {
    modal.classList.add('is-open')
    // записываем в глобальный объект текущее открытое модальное окно
    modalOpenEvents.target = selector
    addListenerCloseBtn(selector)
  }
}

// ф-я закрытия модалки
const closeModal = () => {
  // Получаем текущее открытое модальное окно
  const modal = document.querySelector(modalOpenEvents.target)

  if (modal) {
    modal.classList.remove('is-open')
    modalOpenEvents.target = null
  }
}
// .js-open-modal - общий класс для открытия модалки
// data-modal-сlass="your-modal-class" - атрибут с классом модалки которая откр. по клику на эту кнопку
const openModalBtns = document.querySelectorAll('.js-open-modal')
openModalBtns.forEach(btn => {
  btn.addEventListener('click', () => openModal(btn.dataset.modalClass))
})

function addListenerCloseBtn(selector) {
  // .js-close-modal - общий класс для закрытия модалки
  // currentOpenModal - текущее открытое модальное окно
  const currentOpenModal = document.querySelector(selector)
  const closeModalBtn = currentOpenModal.querySelectorAll('.js-close-modal')
  closeModalBtn.forEach(btn => {
    btn.addEventListener('click', closeModal)
  })
}

document.addEventListener('keyup', (event) => {
  if (event.key == 'Escape' && modalOpenEvents.target) {
    closeModal()
  }
})

const elements = document.querySelectorAll('[name=userphone]')
const maskOptions = {
  mask: '+{7} (000) 000-00-00'
}
elements.forEach((element) => {
  IMask(element, maskOptions)
})

// ф-я отправки данных на сервер
function ajaxSend(data, form) {
  fetch(form.getAttribute('action'), {
    method: form.getAttribute('method'),
    body: data,
  }).then((response) => {
    if (response.ok) {
      form.reset();
      if (modalOpenEvents.target) {
        closeModal()
      }
      openModal('modal-success')
    } else {
      alert("Ошибка. Текст ошибки: ".response.statusText);
    }
  })
}

// ф-я отправки E-mail
(function() {
  const form = document.querySelector('.cta-email-form')

  const validator = new JustValidate(form, {
    errorFieldCssClass: 'is-invalid',
  })

  validator
    .addField(document.querySelector('[name=email]'), [
      {
        rule: 'required',
        errorMessage: 'Укажите E-mail',
      },
      {
        rule: 'minLength',
        value: 8,
        errorMessage: 'Минимально 8 символов',
      },
      {
        rule: 'maxLength',
        value: 50,
        errorMessage: 'Максимально 50 символов',
      },
    ])
    .onSuccess(() => {
      const formData = new FormData(form)
      ajaxSend(formData, form)
    })
})();

// ф-я отправки телефона
function sendPhoneForm(formClass) {
  const form = document.querySelector(`.${formClass}`)

  const validator = new JustValidate(form, {
    errorFieldCssClass: 'is-invalid',
  })

  validator
    .addField(form.querySelector('[name=userphone]'), [
      {
        rule: 'required',
        errorMessage: 'Укажите телефон',
      },
      {
        rule: 'minLength',
        value: 18,
        errorMessage: 'Заполните полностью',
      },
    ])
    .addField(form.querySelector('[name=agreement]'), [
      {
        rule: 'required',
        errorMessage: 'Обязательное поле',
      }
    ])
    .onSuccess(() => {
      const formData = new FormData(form)
      ajaxSend(formData, form)
    })
}

sendPhoneForm('cta-form')
sendPhoneForm('modal-form')

const customCloseModal = ({addClass, removeClass}) => {
  const closeBtns = document.querySelectorAll('.js-close-modal-politic')
  const prevOpenModal = modalOpenEvents.target ? modalOpenEvents.target.substring(1) : null

  closeBtns.forEach(btn => {
    if (addClass) {
      btn.classList.add('js-politic-modal')
    }
    if (removeClass) {
      btn.classList.remove('js-politic-modal')
    }

    btn.addEventListener('click', () => {
      closeModal()
      if (btn.classList.contains('js-politic-modal') && prevOpenModal) {
        openModal(prevOpenModal)
      }
    })
  })
}

const modalPoliticLink = document.querySelector('.modal-politic-link')
modalPoliticLink.addEventListener('click', () => {
  customCloseModal({addClass: true})
  closeModal()
  openModal('modal-politic')
})

const politicLink = document.querySelector('.politic-link')
politicLink.addEventListener('click', () => {
  customCloseModal({removeClass: true})
  openModal('modal-politic')
})

