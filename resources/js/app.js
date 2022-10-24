require('./bootstrap');
//san pham//
const anhto = document.querySelector(".sanpham-content-left-anhto img")
const anhnho = document.querySelectorAll(".sanpham-content-left-anhnho img")
anhnho.forEach(function(imgitem, X) {
    imgitem.addEventListener("click", function() {
        anhto.src = imgitem.src
    })
})


const thongtin = document.querySelector(".thongtin")
const thongso = document.querySelector(".thongso")
if (thongso) {
    thongso.addEventListener("click", function() {
        document.querySelector(".sanpham-content-right-botom-content-thongtin").style.display = "none"
        document.querySelector(".sanpham-content-right-botom-content-thongso").style.display = "block"
    })
}
if (thongtin) {
    thongtin.addEventListener("click", function() {
        document.querySelector(".sanpham-content-right-botom-content-thongtin").style.display = "block"
        document.querySelector(".sanpham-content-right-botom-content-thongso").style.display = "none"
    })
}
const butTon = document.querySelector(".sanpham-content-right-botom-top")
if (butTon) {
    butTon.addEventListener("click", function() {
        document.querySelector(".sanpham-content-right-botom-content-cmt").classList.toggle("active")
    })
}