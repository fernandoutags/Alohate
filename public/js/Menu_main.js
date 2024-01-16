/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, vanId) =>{
    const toggle = document.getElementById(toggleId),
          nav = document.getElementById(vanId)
 
    toggle.addEventListener('click', () =>{
        // Add show-menu class to nav menu
        nav.classList.toggle('show-menu')
 
        // Add show-icon to show and hide the menu icon
        toggle.classList.toggle('show-icon')
    })
 }
 
 showMenu('lol-toggle','lol-menu')