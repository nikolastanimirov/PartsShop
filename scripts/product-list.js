//Search Engine
function myFunction() {
  let input, filter, ul, li, a, i, txtValue, li1, li2;
  input = document.getElementById("searchValue-logged");
  filter = input.value.toUpperCase();
  ul = document.getElementById("display_item");
  li1 = ul.getElementsByClassName("card")[0];
  li = li1.getElementsByClassName("unique-item")[0];

  //Length
  li2 = ul.getElementsByClassName("card");

  console.log(li2.length);
  for (i = 0; i < li2.length; i++) {
    a = li[i].getElementsByTagName("h2");
    console.log(a);
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

// //Pagination
// const taskList = document.querySelector("#product-list-logged");

// let first = document.querySelector(".first");
// let previous = document.querySelector(".previous");
// let next = document.querySelector(".next");
// let last = document.querySelector(".last");

// let page = 0;

// let arrayList = document.getElementById("display_item").querySelectorAll("li");

// for (let l = 0; l < page + 12; l++) {
//   taskList.appendChild(arrayList[l]);
// }

// next.addEventListener("click", () => {
//   page == arrayList.length - 12 ? (page = 0) : (page += 12);
//   taskList.innerHTML = "";
//   for (let i = page; i < page + 12; i++) {
//     taskList.appendChild(arrayList[i]);
//   }
//   window.scrollTo(0, 0);
// });
// previous.addEventListener("click", () => {
//   page == 0 ? (page = arrayList.length - 12) : (page -= 12);
//   taskList.innerHTML = "";
//   for (let i = page; i < page + 12; i++) {
//     taskList.appendChild(arrayList[i]);
//   }
//   window.scrollTo(0, 0);
// });

// first.addEventListener("click", () => {
//   page = 0;
//   taskList.innerHTML = "";
//   for (let i = page; i < page + 12; i++) {
//     taskList.appendChild(arrayList[i]);
//   }
//   window.scrollTo(0, 0);
// });
// last.addEventListener("click", () => {
//   page = arrayList.length - 12;
//   taskList.innerHTML = "";
//   for (let i = page; i < page + 12; i++) {
//     taskList.appendChild(arrayList[i]);
//   }
//   window.scrollTo(0, 0);
// });
