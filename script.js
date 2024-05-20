
const menuBtn = document.getElementById('menu_mobile');
const menu = document.getElementById('menu');
menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('open');
    menuBtn.classList.toggle('close');
    menu.classList.toggle('open')
});

function showPopup(message) {
    const popupContainer = document.getElementById('popup-container');
    const popup = document.createElement('div');
    popup.className = 'popup';
    popup.textContent = message;

    popupContainer.appendChild(popup);
    setTimeout(() => {
        popup.remove();
    }, 5000);
}
    