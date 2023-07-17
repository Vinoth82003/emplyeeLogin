console.log(`js logged`);

const filters = document.querySelectorAll(".menulist");

const rows = document.querySelectorAll(".jobtype");

function filterTable(index) {
  rows.forEach((row) => {
    if (index === "1") {
      row.parentElement.style.display = "";
    } else if (index === "2") {
      if (row.innerText.includes("Daily")) {
        row.parentElement.style.display = "";
      } else {
        row.parentElement.style.display = "none";
      }
    } else if (index === "3") {
      if (row.innerText.includes("Monthly")) {
        row.parentElement.style.display = "";
      } else {
        row.parentElement.style.display = "none";
      }
    }
  });
}

filters.forEach((filter) => {
  filter.addEventListener("click", function () {
    filters.forEach((e) => {
      e.classList.remove("active");
    });
    filter.classList.add("active");
    var index = filter.getAttribute("index");

    filterTable(index);
  });
});

const editBtn = document.querySelector(".editBtn");
const editInput = document.querySelector(".editInput");
const password = document.querySelector(".password");
const addBtn = document.querySelector(".addBtn");
const addBtnn = document.querySelector(".editbtn");
const editBtnn = document.querySelector(".addbtn");
// editBtn.onclick() = function (){
//   editInput.classList.toggle('active');
// }

editBtn.addEventListener("click", function () {
  editInput.classList.add("active");
  password.type = "hidden";
  addBtnn.style.display = "";
  editBtnn.style.display = "none";
});

console.log(addBtn);
addBtn.addEventListener("click", function () {
  editInput.classList.add("active");
  password.type = "text";
  editBtnn.style.display = "";
  addBtnn.style.display = "none";
});

const filtersBtn = document.querySelectorAll(".filter");

filtersBtn.forEach((btn) => {
  btn.addEventListener("click", function () {
    editInput.classList.remove("active");
  });
});
