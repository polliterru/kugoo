document.addEventListener('DOMContentLoaded', () => {
  const headerNav = document.querySelector('.js-header-nav')
  const burgerMenu = document.querySelector('.js-burger-menu')
  const closeBtn = document.querySelector('.js-header-nav-close')

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
  modal.classList.add('is-open')
  // записываем в глобальный объект текущее открытое модальное окно
  modalOpenEvents.target = selector
  addListenerCloseBtn(selector)
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