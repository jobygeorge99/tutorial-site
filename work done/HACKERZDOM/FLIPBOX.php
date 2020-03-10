
<style>
  body {
  color: #333;
  font-family: "Raleway", Arial, Helvetica, serif;
  font-weight: normal;
  margin: 0;
  padding: 0;
  background: url(img/fondo_blanco.png) repeat 0 0 #fff;
}

h1 {
  color: black;
  text-align: center;
  margin: 0 0 5% 0;
  padding: 0.5em;
  margin: 0 0 5% 0;
}

.cardBox {
  float: left;
  font-size: 1.2em;
  margin: 1% 0 0 1%;
  perspective: 800px;
  transition: all 0.3s ease 0s;
  width: 23.7%;
}

.cardBox:hover .card {
  transform: rotateY( 180deg);
}

.card {
  background: #222;
  cursor: default;
  height: 300px;
  transform-style: preserve-3d;
  transition: transform 0.4s ease 0s;
  width: 100%;
  -webkit-animation: giro 1s 1;
  animation: giro 1s 1;
  border-radius: 30px;
  
}

.card p {
  margin-bottom: 1.8em;
}

.card .front,
.card .back {
  backface-visibility: hidden;
  box-sizing: border-box;
  color: white;
  display: block;
  font-size: 1.2em;
  height: 100%;
  padding: 0.8em;
  position: absolute;
  text-align: center;
  width: 100%;
  border-radius: 30px;

}

.card .front strong {
  background: #fff;
  border-radius: 100%;
  color: #222;
  font-size: 1.5em;
  line-height: 30px;
  padding: 0 7px 4px 6px;
}

.card .back {
  transform: rotateY( 180deg);
}

.card .back a {
  padding: 0.3em 0.5em;
  background: #333;
  color: #fff;
  text-decoration: none;
  border-radius: 1px;
  font-size: 0.9em;
  transition: all 0.2s ease 0s;
}

.card .back a:hover {
  background: #fff;
  color: #333;
  text-shadow: 0 0 1px #333;
}

.cardBox:nth-child(1) .card .back {
  background: cornflowerblue;
}

.cardBox:nth-child(2) .card .back {
  background: orange;
}

.cardBox:nth-child(3) .card .back {
  background: yellowgreen;
}

.cardBox:nth-child(4) .card .back {
  background: tomato;
}

.cardBox:nth-child(2) .card {
  -webkit-animation: giro 1.5s 1;
  animation: giro 1.5s 1;
}

.cardBox:nth-child(3) .card {
  -webkit-animation: giro 2s 1;
  animation: giro 2s 1;
}

.cardBox:nth-child(4) .card {
  -webkit-animation: giro 2.5s 1;
  animation: giro 2.5s 1;
}

@-webkit-keyframes giro {
  from {
    transform: rotateY( 180deg);
  }
  to {
    transform: rotateY( 0deg);
  }
}

@keyframes giro {
  from {
    transform: rotateY( 180deg);
  }
  to {
    transform: rotateY( 0deg);
  }
}

@media screen and (max-width: 767px) {
  .cardBox {
    margin-left: 2.8%;
    margin-top: 3%;
    width: 46%;
  }
  .card {
    height: 285px;
  }
  .cardBox:last-child {
    margin-bottom: 3%;
  }
}

@media screen and (max-width: 480px) {
  .cardBox {
    width: 94.5%;
  }
  .card {
    height: 260px;
  }
}
</style>


<h1>COMPLETE COMPUTER SCIENCE GUIDE</h1>

<div class="boxesContainer">

  <div class="cardBox">
    <div class="card">
      <div class="front">
        <h3>LEVEL ONE</h3>
        <p>For All Users</p>
        <strong>&#x21bb;</strong>
      </div>
      <div class="back">
        <h3>DETAILS:</h3>
        <p>General informations related to computers and security threats</p>        
        <a href="#">OPEN</a>
      </div>
    </div>
  </div>

  <div class="cardBox">
    <div class="card">
      <div class="front">
        <h3>Card Two</h3>
        <p>Hover to flip</p>
        <strong>&#x21bb;</strong>
      </div>
      <div class="back">
        <h3>Back Side Two</h3>
        <p>Content in card two</p>
        <a href="#">Button 2</a>
      </div>
    </div>
  </div>

  <div class="cardBox">
    <div class="card">
      <div class="front">
        <h3>Card Three</h3>
        <p>Hover to flip</p>
        <strong>&#x21bb;</strong>
      </div>
      <div class="back">
        <h3>Back Side Three</h3>
        <p>Content in card three</p>
        <a href="#">Button 3</a>
      </div>
    </div>
  </div>

  <div class="cardBox">
    <div class="card">
      <div class="front">
        <h3>Card Four</h3>
        <p>Hover to flip</p>
        <strong>&#x21bb;</strong>
      </div>
      <div class="back">
        <h3>Back Side Four</h3>
        <p>Content in card four</p>
        <a href="#">Button 4</a>
      </div>
    </div>
  </div>

</div>

