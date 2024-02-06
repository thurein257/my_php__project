<?php
include('header.php');
?>
    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="images/home-slider1.jpg">
            </div>
            <div class="item">
                <img src="images/home-slider2.jpg">
            </div>
            <div class="item">
                <img src="images/home-slider3.jpg">
            </div>
            <div class="item">
                <img src="images/home-slider4.jpg">
            </div>
            <div class="item">
                <img src="images/home-slider5.jpg">
            </div>
        </div>
        <!-- button prev and next -->
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div> 
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>   
    </div>
    <div class="m2">
        <h2>THE BEST TOP 3 IEMs UNDER $200</h2>
    </div>
    <div class="products-list">
        <div class="products-list-items">
            <div class="items">
                <div class="col-1">STARFIELD</div>
                <div class="col-2">IEMs</div>
                <img src="images/STARFIELD.jpg" class="list-img">
                <div class="col-3">$109.99</div>
            </div>
        </div>  
        <div class="products-list-items">
            <div class="items">
                <div class="col-1">KATO</div>
                <div class="col-2">IEMs</div>
                <img src="images/KATO.jpg" class="list-img">
                <div class="col-3">$189.99</div>
            </div>
        </div> 
        <div class="products-list-items">
            <div class="items">
                <div class="col-1">STARFIELD II</div>
                <div class="col-2">IEMs</div>
                <img src="images/starfield ii.jpg" class="list-img">
                <div class="col-3">$109.99</div>
            </div>
        </div> 
    </div>
    <style>
table {
  border-collapse: collapse;
  width: 45%;
  margin: 70px;
}

th, td {
  font-family: 'Poppins', sans-serif;  
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #333;
}
</style>
    <table>
  <tr>
    <th>Technical Details of KATO</th>
  </tr>
  <tr>
    <td>Driver</td>
    <td>4BA+1DD</td>
  </tr>
  <tr>
    <td>Impendance</td>
    <td>24 ohms</td>
  </tr>
  <tr>
    <td>Sensitivity</td>
    <td>111dB</td>
  </tr>
  <tr>
    <td>Frequency Response</td>
    <td>7Hz-40kHz</td>
  </tr>
  <tr>
    <td>Cable</td>
    <td>125cm</td>
  </tr>
  <tr>
    <td>Plug Type</td>
    <td>3.5mm Plug</td>
  </tr>
</table>

    <script src="app.js"></script>
</body>
</html>