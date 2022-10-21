<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script scr="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
        
        <title>Thuong mai dien tu</title>
    </head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo.png" style="width:200px;height:200px;" background-image="none">
        </div>
        <div class="menu">
            <li><a href="">BÀN PHÍM</a>
                <ul class="sub-menu">
                    <li><a href="" style="color: #82c91e">Thương hiệu</a>
                    <ul>
                        <li><a href="" style="color: #373941">Consair </a>
                        <li><a href="" style="color: #373941">Razer</a> 
                    </ul>
                    <li><a href="" style="color: #82c91e">Giá</a>
                        <ul>
                            <li><a href="" style="color: #373941">Dưới 500k</a>
                            <li><a href="" style="color: #373941">Từ 500k - 1tr</a> 
                        </ul>
                    </li>   
                </ul>
            </li>
            <li><a href="">CHUỘT - LÓT CHUỘT</a></li>
            <li><a href="">TAI NGHE</a></li>
            <li><a href="">ALES</a></li>
            <li><a href="">BỘ SƯU TẬP</a></li>
            <li><a href="">THÔNG TIN</a></li>
        </div>
        <div class="others">
            <li><input placeholder="Tìm kiếm" type="text"> </li>
            <li><img class="timkiem" src="images/search.png" style="width:30px;height:30px;"></li>
            <li><img class="giohang" src="images/bag.png" style="width:30px;height:30px;"></li>
            <li>
                <button class="dangnhap"  href="../sighup/dangky.html"> <p> Đăng nhập </p></button>
            </li>
            <li><button class="dangki" href="../sighup/dangnhap.html"><p>  Đăng kí  </p></button></li>
        </div>
    </header>
    <section id="silder">
        <div class="aspect-ratio-169">
            <img src="images/slide1.jpg">
            <img src="images/slide2.jpg">
            <img src="images/slide3.jpg">
            <img src="images/silde4.jpg">
            <img src="images/silde5.jpg">
        </div>
        <div class="dotCon">
         <div class="dot active"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
         <div class="dot"></div>
        </div>
    </section>
</body>
<script>
    const imgPos = document.querySelectorAll(".aspect-ratio-169 img")
    const imgCon =document.querySelector('.aspect-ratio-169')
    const dotitem=document.querySelectorAll(".dot")
    let imgNum=imgPos.length
    let index=0;
    imgPos.forEach(function(image,index){
      image.style.left= index*100 + "%"
      dotitem[index].addEventListener("click",function(){
        slider(index)
      })
    })
    function imgSlide ()
    {
        index++;
        if (index>=imgNum) 
        {
            index=0;
        }
        slider(index) 
    }
    function slider(index){
        imgCon.style.left="-" +index*100+ "%"
        const dotAct = document.querySelector('.active')
        dotAct.classList.remove("active")
        dotitem[index].classList.add("active")
    }
    setInterval(imgSlide,5000)

   

</script>

<style>
    *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
li{
    list-style: none;
}
a{
    text-decoration: none;
    color: #000;
}
header{
    display: flex;
    justify-content: space-between;
    padding: 12px 50px;
    height: 70px;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1;
    background: rgba(225, 225,225, 0.3);

}
.logo{
    flex: 1;
}
.menu{
    flex: 3;
    display: flex;

}
.menu > li{
padding: 0 12px;
position: relative;
}
.sub-menu {
    position: absolute;
    width: 150px;
    border: 1px solid #ccc;
    padding: 10px 0 10px 30px;
    visibility: hidden;
    top: 60px;
    transition: 0.3s;
    z-index: 1;
    background-color: #fff;
}
.sub-menu li a{
    font-weight: normal;
}

.sub-menu ul {
    padding-left: 20px;
}
.menu > li:hover .sub-menu{
    visibility: visible;
    top: 45px;

}
.menu > li > a {
    font-size: 12px;
    font-weight: bold!important;
    display: block;
    line-height: 20px;
}
.others{
    flex: 1;
    display: flex;
}
.others > li {
    padding: 0 12px;
}

.others > li:first-child input{
    width: 250%;
    height: 100%;
    border: none;
    border-bottom: 1px;
    background: transparent;
    outline: none;
}
.others > li:first-child i{
    position: absolute;
    right: 10px;
}
.aspect-ratio-169 {
    display: block;
    position: relative;
    padding-top: 56.25%;
    transition: 0.3S;
   
  }
  
  .aspect-ratio-169 img {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
  }
  .dotCon{
    position: absolute;
    height: 30px;
    width: 100%;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
  }
  .dot {
    height: 10px;
    width: 10px;
    background-color: #ccc;
    border-radius: 50%;
    margin-right: 12px;
    cursor: pointer;
  }
  .dot.active{
    background-color: #333;
  }
  #silder {
    padding-bottom: 30px;
    border-bottom: 2px solid #000;
    overflow: hidden;
  }
button{
    background: transparent;
    outline: none;
    border: none;
    cursor: pointer;
}
.timkiem{
    cursor: pointer;
}
.giohang{
    cursor: pointer;
}
</style>

<style></style>
</html>