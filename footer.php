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
</div>

<ul class="footer-right">
<li>
  <h2> Produkt </h2>

  <ul >
    <li> <a href="#">Theme Design </a> </li>
    <li> <a href="#">Plugin Design </a></li>
    <li> <a href="#">Wordpress </a></li>
    <li> <a href="#">Jommla Yemplate</a></li>
    <li> <a href="#"> HTML Template </a> </li>
  </ul>
</li>
<li>
  <h2> Useful Links</h2>

<ul>
  <li><a href="">Blog </a> </li>
  <li><a href="#">Pricing </a></li>
  <li><a href="#">Tickets </a></li>
  <li><a href="#">Certification</a></li>
  <li><a href="#">Customor Service </a></li>
</ul>
</li>

<li>
  <h2> Adresse </h2>

<ul>
  <li><a href="#">Lohrtalweg 10</a></li>
  <li><a href="#">74613 Mosbach </a></li>
  <li><a href="#">Baden-Württemberg </a></li>
  <li><a href="#">Deutschland</a></li>
</ul>
</li>




</ul>

<p>Copyright &copy; 2022  All rights not reserved. :)</p>


</footer>

</html>
