//Search Engine
function myFunction() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById("searchValue");
  filter = input.value.toUpperCase();
  ul = document.getElementById("products-list");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("h3")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

//Pagination
const taskList = document.querySelector("#products-list");

let first = document.querySelector(".first");
let previous = document.querySelector(".previous");
let next = document.querySelector(".next");
let last = document.querySelector(".last");

let page = 0;

let arrayList = document
  .getElementById("search-products")
  .querySelectorAll("li");

for (let l = 0; l < page + 12; l++) {
  taskList.appendChild(arrayList[l]);
}

next.addEventListener("click", () => {
  page == arrayList.length - 12 ? (page = 0) : (page += 12);
  taskList.innerHTML = "";
  for (let i = page; i < page + 12; i++) {
    taskList.appendChild(arrayList[i]);
  }
  window.scrollTo(0, 0);
});
previous.addEventListener("click", () => {
  page == 0 ? (page = arrayList.length - 12) : (page -= 12);
  taskList.innerHTML = "";
  for (let i = page; i < page + 12; i++) {
    taskList.appendChild(arrayList[i]);
  }
  window.scrollTo(0, 0);
});

first.addEventListener("click", () => {
  page = 0;
  taskList.innerHTML = "";
  for (let i = page; i < page + 12; i++) {
    taskList.appendChild(arrayList[i]);
  }
  window.scrollTo(0, 0);
});
last.addEventListener("click", () => {
  page = arrayList.length - 12;
  taskList.innerHTML = "";
  for (let i = page; i < page + 12; i++) {
    taskList.appendChild(arrayList[i]);
  }
  window.scrollTo(0, 0);
});


