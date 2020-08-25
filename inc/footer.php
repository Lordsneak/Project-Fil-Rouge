<footer id="footer">
         
                          <div class="footerbar">

                          </div>
                            <div class="row justify-content-center">
                            <p><a href="">Contact us</a></p>
                            <p><a href="">F.A.Q</a></p>
                            <p><a href="">Coockies policy</a></p>
                            <p><a href="">Legal Term</a></p>
                            <p><a href="">Privacy policy</a></p> 
                            

                            </div>
                      </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function(){
  $("#tableSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
    </script>
</body>
</html>