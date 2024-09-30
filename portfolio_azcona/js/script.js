function toggleMenu() {
    const menu = document.querySelector (".menu-links");
    const icon = document.querySelector (".web-icon"); 
    menu.classlist.toggle("open");
    icon.classList.toggle("open");
}