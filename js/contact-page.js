const supportButton = document.querySelector('.out-of-hours');
const supportInfo = document.querySelector('.critical-support');

supportButton.addEventListener("click", showSupport);

function showSupport(event) {
    event.preventDefault();
    this.classList.toggle('active');
    supportInfo.classList.toggle('active');
}