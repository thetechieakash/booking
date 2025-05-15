const notifier = document.querySelector('.notifier');
const notiAttr = notifier.getAttribute('data-visibility')

setTimeout(() => {
    if (notiAttr == 'show'){
        notifier.style.display = 'none';
    }
}, 5000)

