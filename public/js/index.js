const menuDropdown = document.querySelector(".menu-dropdown");
const dropdownClick = document.querySelector(".dropdown-click");
const showSidebar = document.getElementById("show-sidebar");
const boxSidebar = document.getElementById("box-sidebar");
const btnDeletePost = document.querySelectorAll(".btn-delete-post");
const modalDelete = document.querySelector(".modal-delete");
const postName = document.querySelector(".post-name");
const formDeletePost = document.getElementById("form-delete-post");
const shorting = document.getElementById("shorting")
    ? document.getElementById("shorting")
    : null;
const search = document.getElementById("search");
const boxResultSearch = document.getElementById("box-result-search");
const searchResult = document.querySelector(".search-result");
const searchButton = document.getElementById("search-button");
const auth = document.getElementById("auth");
const searchBox = document.getElementById("search-box");

dropdownClick.addEventListener("click", function (e) {
    e.stopPropagation();
    menuDropdown.classList.toggle("hidden");
});

btnDeletePost.forEach((item, index) => {
    item.addEventListener("click", function (e) {
        const title = item.getAttribute("data-title");
        const id = item.getAttribute("data-id");
        formDeletePost.setAttribute(
            "action",
            "http://localhost:8000/admin/blog/" + id
        );
        postName.innerHTML = title;
        modalDelete.classList.toggle("hidden");
    });
});

document.addEventListener("click", function (e) {
    if (!menuDropdown.classList.contains("hidden")) {
        if (!checkClassList(e, "main-menu-dropdown")) {
            menuDropdown.classList.add("hidden");
        }
    }
    if (checkClassList(e, "box-sidebar")) {
        boxSidebar.classList.add("hidden");
    }
    if (checkClassList(e, "modal-delete") || checkClassList(e, "modal-close")) {
        modalDelete.classList.add("hidden");
    }
    if (!checkClassList(e, "search-link")) {
        boxResultSearch.classList.add("hidden");
    }

    if (!checkClassList(e, "search") && !checkClassList(e, "search-button")) {
        searchButton.classList.remove('hidden');
        searchBox.classList.add("hidden");
        searchBox.classList.remove("flex");
        auth.classList.remove("hidden");
    }
});

function checkClassList(e, classes) {
    return e.target.classList.contains(classes);
}

showSidebar.addEventListener("click", function () {
    boxSidebar.classList.remove("hidden");
});

if (shorting !== null) {
    shorting.addEventListener("change", function (e) {
        if (e.target.value === "") {
            return (window.location = "http://localhost:8000/blog");
        }
        return (window.location =
            "http://localhost:8000/blog?by=" + e.target.value);
    });
}

search.addEventListener("keyup", function (e) {
    document.getElementById("text-search").innerHTML = e.target.value;
    if (e.target.value !== "") {
        boxResultSearch.classList.remove("hidden");
        const xhr = new XMLHttpRequest();
        xhr.open(
            "GET",
            "http://localhost:8000/blog/search?s=" + e.target.value,
            true
        );
        xhr.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                const res = JSON.parse(this.response);
                let html = "";
                if (res.length > 0) {
                    res.forEach((item, index) => {
                        html += `
                        <a href="http://localhost:8000/blog/${
                            item.slug
                        }" class="search-link block py-2 border-t border-gray-300 px-3 hover:bg-gray-200">
                            <div class="search-link">
                                <span class="search-link block break-words text-sm tracking-wide font-medium text-blue-500 hover:underline">${item.title.slice(
                                    0,
                                    20
                                )}...</span>
                            </div>
                            <div class="search-link">
                                <p class="search-link block break-words text-xs text-gray-700">${item.body.slice(
                                    0,
                                    100
                                )}...</p>
                            </div>
                        </a>
                        `;
                    });
                } else {
                    html = `
                    <div class="py-2 border-t border-gray-300 px-3">
                        <p class="text-sm font-medium text-gray text-center">No result Post</p>
                    </div>
                    `;
                }

                searchResult.innerHTML = html;
            }
        };
        xhr.send();
    } else {
        searchResult.innerHTML = "";
        boxResultSearch.classList.add("hidden");
    }
});

// search.addEventListener("blur", function (e) {
//      boxResultSearch.classList.add("hidden");

// });

searchButton.addEventListener("click", function (e) {
    this.classList.add("hidden");
    searchBox.classList.remove("hidden");
    searchBox.classList.add("flex");
    auth.classList.add("hidden");
    search.focus();
});
