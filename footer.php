<!-- Start::footer  -->
<footer>
        <div class="footer footer-bottom">
        <div class="container">
            <p class="pull-left"> Copyright © <?php echo date('Y');?>. Design and Develop by - Disuza Jen. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li>
                    <a  target="blank" href="https://www.facebook.com/profile.php?id=100011576444095">
                    <i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                    <a target="blank"  href="https://plus.google.com/116407769803493244155">
                    <i class="fa fa-google"></i></a>
                    </li>
                    <li>
                         <a target="blank"  href="https://twitter.com/disuzajen1">
                         <i class="fa fa-twitter"></i></a></li>
                    <li>
                        <a target="blank" href="https://plus.google.com/116407769803493244155">
                    <i class="fa fa-link"></i>
                    </a>
                    </li>
                </ul> 
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>
<!-- End::footer  -->
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
</body>
</html>
<script>
$(document).ready(function(){

// Instance the tour
var tour = new Tour({
  debug: true,
  storage: false,

  steps: [
    {
    element: "#freeteachnology",
    title: "User: Disuza Jen",
    content: "freeteachnology of step",
    placement: "bottom",
     backdrop: true,
  },
  {
    element: "#freeteachnology1",
    title: "User: Disuza Jen 1",
    content: "freeteachnology of step 1",
    placement: "right",
     backdrop: true,
  },
  {
    element: "#freeteachnology2",
       title: "User: Disuza Jen 2",
    content: "freeteachnology of my step 2",
    placement: "top", 
     backdrop: true,
  } ,
  {
    element: "#freeteachnology3",
       title: "User: Disuza Jen 3",
    content: "freeteachnology of my step 3",
    placement: "right",  
     backdrop: true,

  }
  ,
  {
        element: "#freeteachnology4",
        title: "User: Disuza Jen 4",
        content: "freeteachnology of my step 4",
        placement: "bottom",    
         backdrop: true,
  } 
],
  });

if (tour.ended()) {
  tour.restart();
} else {
  tour.init();
  tour.start();
}
});

</script>