<script>
  window.onscroll = function() {myFunction()};
  
  var header = document.getElementById("sickystickyHeader");
  var sticky = header.offsetTop;
  
  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
  </script>
       
</body>

<footer class ="footer">
  <div class="footer-left">
    <img src="favicon.ico" alt="Icon">
    <p>
    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
    </p>
    <div class="Logo">
      <a herf=""> <i class="fa fa-facebook"></i></a>
      <a herf=""> <i class="fa fa-twitter"></i></a>
      <a herf=""> <i class="fa fa-dribble"></i></a>
      <a herf=""> <i class="fa fa-youtube"></i></a>
      <a herf=""> <i class="fa fa-tumblr"></i></a>
</div>
</div>
<ul class="footer-right">
<li>
  <h2> Produkt </h2>

  <ul class="box">
    <li><a herf="#">Theme Design </a></li>
    <li><a herf="#">Plugin Design </a></li>
    <li><a herf="#">Wordpress </a></li>
    <li><a herf="#">Jommla Yemplate</a></li>
    <li><a herf="#">HTML Template </a></li>
  </ul>
</li>
<li>
  <h2> Useful Links</h2>

<ul class="box">
  <li><a herf="#">Blog </a></li>
  <li><a herf="#">Pricing </a></li>
  <li><a herf="#">Tickets </a></li>
  <li><a herf="#">Certification</a></li>
  <li><a herf="#">Customor Service </a></li>
</ul>
</li>

<li>
  <h2> Adresse </h2>

<ul class="box">
  <li><a herf="#">Lohrtalweg 10</a></li>
  <li><a herf="#">74613 Mosbach </a></li>
  <li><a herf="#">Baden-Württemberg </a></li>
  <li><a herf="#">Deutschland</a></li>
</ul>
</li>

<div class="footer-buttom">
<p>All Right reserved by &copy;conceptal 2022 </p>


</footer>

</html>