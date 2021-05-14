const menuDropdown = document.querySelector(".menu-dropdown");
const dropdownClick = document.querySelector(".dropdown-click");
const showSidebar = document.getElementById('show-sidebar');
const boxSidebar = document.getElementById('box-sidebar');

dropdownClick.addEventListener("click", function (e) {
    e.stopPropagation();
    menuDropdown.classList.toggle("hidden");
});

document.addEventListener("click", function (e) {
    if (!menuDropdown.classList.contains("hidden")) {
        if (!e.target.classList.contains("main-menu-dropdown")) {
            menuDropdown.classList.add("hidden");
        }
    }
    if(e.target.classList.contains('box-sidebar')){
        boxSidebar.classList.add('hidden');
    }
});


showSidebar.addEventListener('click', function(){
    boxSidebar.classList.remove('hidden');
})

