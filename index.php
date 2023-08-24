<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('https://cdn.pic.in.th/file/picinth/002e4c0ba7c3f38016f.png'); /* ใช้ URL ของรูปภาพ */
  /*background-size: cover;  ปรับขนาดรูปภาพให้ครอบคลุมพื้นที่ */
  /*background-position: center;  จุดเริ่มต้นที่จะแสดงภาพ */
  min-height: 450px;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url('https://cdn.pic.in.th/file/picinth/003980714090c90d47a.png'); 
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url('https://cdn.pic.in.th/file/picinth/00404983b7fff1a7b5b.png'); 
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Started </a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="https://godotengine.org/" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
       <button class="btn">
    <span class="spinner-grow spinner-grow-sm"></span>
    Click For Download
  </button>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="https://godotengine.org/" class="w3-bar-item w3-button">Dowload Godot Engine</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ProJect</h3>
  <p class="w3-center"><em>I love creating games and programming.</em></p>
  <p> Godot Engine เป็นเอ็นจิ้นเกมข้ามแพลตฟอร์มที่อัดแน่นไปด้วยฟีเจอร์เพื่อสร้างเกม 2D และ 3D จากอินเทอร์เฟซแบบรวม มีชุดเครื่องมือทั่วไปที่ครอบคลุม เพื่อให้ผู้ใช้สามารถมุ่งเน้นไปที่การสร้างเกมโดยไม่ต้องคิดค้นวงล้อใหม่ เกมสามารถส่งออกไปยังหลายแพลตฟอร์มได้ด้วยคลิกเดียว รวมถึงแพลตฟอร์มเดสก์ท็อปหลัก (Linux, macOS, Windows), แพลตฟอร์มมือถือ (Android, iOS) รวมถึงแพลตฟอร์มและคอนโซลบนเว็บ</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><a href ="https://docs.godotengine.org/en/stable/getting_started/introduction/index.html"><i class="fa fa-user w3-margin-right"></i></a>Godot Engine</b></p><br>
      <img src="https://cdn.pic.in.th/file/picinth/002935901622557fe03.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>นี่คือรายการบทช่วยสอนและแหล่งข้อมูลของบุคคลที่สามที่สร้างโดยชุมชน Godot สำหรับทรัพยากร โปรดจำไว้ว่ามีห้องสมุด <a href = "https://godotengine.org/asset-library/asset">Godot Asset</a> อย่างเป็นทางการ ซึ่งเต็มไปด้วยแหล่งข้อมูลอย่างเป็นทางการและชุมชนเช่นกัน! ดูรายการใหญ่นี้ที่<a href = "https://www.reddit.com/r/godot/comments/an0iq5/godot_tutorials_list_of_video_and_written/?rdt=47282">Reddit</a></p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
  <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:20%">20%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:25%">25%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:15%">15%</div>
  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14+</span><br>
    Partners
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">55+</span><br>
    Projects Done
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">89+</span><br>
    Happy Clients
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">150+</span><br>
    Meetings
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">การเตรียมตัวก่อนเริ่ม (preparation before starting)</h3>
  <p class="w3-center"><em>บทความนี้มีไว้เพื่อช่วยให้คุณทราบว่า Godot อาจเหมาะกับคุณหรือไม่.<br> นี่ไม่ใช่ภาพรวมที่ครบถ้วนสมบูรณ์แต่อย่างใด เราจะแนะนำคุณสมบัติพร้อมรูปภาพประกอบโดยคลิ๊กที่รูปภาพเพื่อแสดง</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="https://cdn.pic.in.th/file/picinth/006194fa422603052dd.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Godot คืออะไร ? <br> Godot เป็นเอนจิ้นเกม 2D และ 3D อเนกประสงค์ที่ออกแบบมาเพื่อรองรับโปรเจ็กต์ทุกประเภท คุณสามารถใช้มันเพื่อสร้างเกมหรือแอปพลิเคชันที่คุณสามารถเผยแพร่บนเดสก์ท็อปหรือมือถือ รวมถึงบนเว็บได้และคุณยังสามารถสร้างเกมคอนโซลได้ด้วย แม้ว่าคุณจะต้องมีทักษะการเขียนโปรแกรมที่แข็งแกร่งหรือต้องมีผู้พัฒนาเพื่อพอร์ตเกมให้กับคุณก็ตาม">
    </div>

    <div class="w3-col m3">
      <img src="https://cdn.pic.in.th/file/picinth/010e70c931596d55f19.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="ภาษาโปรแกรม<br>คุณสามารถเขียนโค้ดเกมของคุณโดยใช้GDScriptซึ่งเป็นภาษาเฉพาะของ Godot และบูรณาการอย่างแน่นหนาด้วยไวยากรณ์ที่ไม่ซับซ้อน หรือ C#ซึ่งเป็นที่นิยมในอุตสาหกรรมเกม นี่คือภาษาสคริปต์หลักสองภาษาที่เรารองรับด้วยเทคโนโลยี GDextension คุณยังสามารถเขียนการเล่นเกมหรืออัลกอริธึมประสิทธิภาพสูงใน C หรือ C++ ได้โดยไม่ต้องคอมไพล์เอ็นจิ้นใหม่ คุณสามารถใช้เทคโนโลยีนี้เพื่อรวมไลบรารีของบริษัทอื่นและชุดพัฒนาซอฟต์แวร์ (SDK) อื่นๆ ไว้ในกลไกได้">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
    </div>

    <div class="w3-col m3">
      <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
    </div>
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I WORK</h3>
  <p class="w3-center"><em>I'am love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="https://cdn.pic.in.th/file/picinth/0031cf77b73c0813734.png" class="w3-image w3-round" style="width:100%">
    </div>

    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <a href ="http://www.svc.ac.th/">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i></a>วิทยาลัยอาชีวศึกษาสุราษฎร์ธานี<br>
        <a href="tel:0828219092">
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i></a> Phone : 082 - 821 - 9020<br>
        <a href="mailto:64209010001@svc.ac.th">
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email :  64209010001@svc.ac.th<br>
      </div>

     
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
