//Show and Hide navigation
const image_container = document.querySelector('.image_container')
image_container.addEventListener('click', () => {
    const icons_container = document.querySelector('.icons_container')
    const clicked_menu = document.querySelector('.clicked_menu')
    const clicked_menu_container = document.querySelector('.clicked_menu_container')
    const main_master_container = document.querySelector('.main_master_container')
    const footer = document.querySelector('.footer')


    image_container.classList.contains('active') ? image_container.classList.remove('active') : image_container.classList.add('active')
    icons_container.classList.contains('active') ? icons_container.classList.remove('active') : icons_container.classList.add('active')
    clicked_menu.classList.contains('active') ? clicked_menu.classList.remove('active') : clicked_menu.classList.add('active')
    clicked_menu_container.classList.contains('active') ? clicked_menu_container.classList.remove('active') : clicked_menu_container.classList.add('active')
    main_master_container.classList.contains('active') ? main_master_container.classList.remove('active') : main_master_container.classList.add('active')

    //hiding footer
    footer.classList.contains('active') ? footer.classList.remove('active') : footer.classList.add('active')
})

const title1 = document.querySelector('.title1')
const title2 = document.querySelector('.title2')

let text_count = 0;

setInterval(() => {
    text_count++
    if (text_count === 1) {
        title1.classList.add('active')
        title2.classList.remove('active')
    }
    if (text_count === 2) {
        text_count = 0

        title2.classList.add('active')
        title1.classList.remove('active')
    }
}, 4000)