

  <footer class="page-footer">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">A2B Plumbing And Electrical</h5>
                  <p class="grey-text text-lighten-4">Coventry based- Electricians, Gas Engineers, Plumbers.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                    <li><a class="grey-text text-lighten-3" href="EmailPage.php">Contact us</a></li>
                    <li><a class="grey-text text-lighten-3" href="gallery.php">Gallery</a></li>
                    <?php if (isset($_SESSION['u_id'])) {
                      echo '<li><a class="grey-text text-lighten-3" href="Incs/logout.php">Logout</a></li>';
                    } else {
                      echo '<li><a class="grey-text text-lighten-3" href="login.php">Login</a></li>';
                    }

                     ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">

              <div class="large-icons center">

                <img class="footer-img right GS" src="images/gas-safe.png" alt="gas safe">
                <a href="https://www.checkatrade.com/A2BPlumbingandElectricalServices/Reviews.aspx" target="_blank"><img class="footer-img right CT" src="images/checkatrade.png" alt="check a trade"></a>
                <a href="https://www.facebook.com/a2bplumbingandelectrical" target="_blank"><img class="footer-img right FB" src="images/facebook.png" alt=""></a>



              </div>
              <div class="small-icons">
                <img class="footer-img right GS" src="images/Small/gas-safe.png" alt="gas safe">
                <a href="https://www.checkatrade.com/A2BPlumbingandElectricalServices/Reviews.aspx" target="_blank"><img class="footer-img right CT" src="images/Small/checkatrade-stacked-sm.png" alt="check a trade"></a>
                <a href="https://www.facebook.com/a2bplumbingandelectrical" target="_blank"><img class="footer-img right FB" src="images/Small/20673.png" alt=""></a>


            </div>

              </div>




            </div>
            <div class="center footer-copyright">
              <br>
              <p>© 2020 A2B Plumbing And Electrical</p>
            </div>
          </footer>
<!--

.FB{
    content:url("https://a2bplumbingandelectrical.co.uk/images/Small/20673.png");
}

.CT{
    content:url("https://a2bplumbingandelectrical.co.uk/images/Small/checkatrade-stacked-sm.png");
}

.GS{
    content:url("https://a2bplumbingandelectrical.co.uk/images/Small/gas-safe.png");
}
 -->

</body>


<script type="text/javascript" src="js/materialize.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, options);
});

// Initialize collapsible (uncomment the lines below if you use the dropdown variation)
// var collapsibleElem = document.querySelector('.collapsible');
// var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

// Or with jQuery

$(document).ready(function(){
  $('.sidenav').sidenav();
});

$(document).ready(function(){
$('#modal1').modal();
});

</script>
</html>
