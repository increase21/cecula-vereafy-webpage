document.addEventListener('DOMContentLoaded', function() {
    function $(element) {
        return document.querySelector(element)
    }
    // when the icon is clicked, toggle the mobile menu
    $('.menu-icon').onclick = () => {
        $('.mobile-menu').classList.toggle('d-none')
    }
})