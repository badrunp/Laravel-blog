const menuDropdown = document.querySelector(".menu-dropdown");
const dropdownClick = document.querySelector(".dropdown-click");
const showSidebar = document.getElementById('show-sidebar');
const boxSidebar = document.getElementById('box-sidebar');
const btnDeletePost = document.querySelectorAll('.btn-delete-post');
const modalDelete = document.querySelector('.modal-delete');
const postName = document.querySelector('.post-name');
const formDeletePost = document.getElementById('form-delete-post');

dropdownClick.addEventListener("click", function (e) {
    e.stopPropagation();
    menuDropdown.classList.toggle("hidden");
});

btnDeletePost.forEach((item, index) => {
    item.addEventListener('click', function(e){
        const title = item.getAttribute('data-title')
        const id = item.getAttribute('data-id')
        formDeletePost.setAttribute('action', 'http://localhost:8000/admin/blog/' + id)
        postName.innerHTML = title;
        modalDelete.classList.toggle('hidden');
    })
})


document.addEventListener("click", function (e) {
    if (!menuDropdown.classList.contains("hidden")) {
        if (!checkClassList(e,"main-menu-dropdown")) {
            menuDropdown.classList.add("hidden");
        }
    }
    if(checkClassList(e,'box-sidebar')){
        boxSidebar.classList.add('hidden');
    }
    if(checkClassList(e, "modal-delete") || checkClassList(e, 'modal-close')){
        modalDelete.classList.add('hidden');
    }
});

function checkClassList(e, classes){
    return e.target.classList.contains(classes);
}

showSidebar.addEventListener('click', function(){
    boxSidebar.classList.remove('hidden');
})

