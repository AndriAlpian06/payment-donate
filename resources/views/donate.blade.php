<!DOCTYPE html>
<html>
  <head>
    <title>Donation Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      /* html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin:0;
      font-size: 60px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      top:30px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #1c87c9;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-image: url("/uploads/media/default/0001/02/cc6bc584f236c7234947015b89151ab6d04c4cbf.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .checkbox input[type=checkbox] {
      display:inline-block;
      height:15px;
      width:15px;
      margin-right:5px;
      vertical-align:text-top;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #1c87c9;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #0692e8;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      } */
      body {
        font-family: Arial;
        font-size: 17px;
        padding: 8px;
        }

        * {
        box-sizing: border-box;
        }

        .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
        }

        .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
        }

        .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
        }

        .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
        padding: 0 16px;
        }

        .container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
        }

        input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        }

        input[type=number] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        }

        label {
        margin-bottom: 10px;
        display: block;
        }

        .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        font-size: 24px;
        }

        .btn {
        background-color: #8756c2;
        color: white;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
        }

        .btn:hover {
        background-color: #8756c2;
        }

        a {
        color: #2196F3;
        }

        hr {
        border: 1px solid lightgrey;
        }

        span.price {
        float: right;
        color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }
        .col-25 {
            margin-bottom: 20px;
        }
    }
    </style>
  </head>
  <body>
    <!-- <div class="testbox">
        <form action="payment" method="GET">
            <div class="banner">
                <h1>Donation Form</h1>
            </div>
            <br/>
            <fieldset>
                <legend>Donation Form</legend>
                <div class="item">
                    <label for="fname">First Name<span>*</span></label>
                    <input id="fname" type="text" name="fname" />
                </div>
                <div class="item">
                    <label for="lname"> Last Name<span>*</span></label>
                    <input id="lname" type="text" name="lname" />
                </div>
                <div class="item">
                    <label for="address">Email Address<span>*</span></label>
                    <input id="address" type="text"   name="email" />
                </div>
                <div class="item">
                    <label for="phone">Phone Number</label>
                    <input id="phone" type="tel"   name="phone"/>
                </div>
                <div class="item">
                    <label for="amount">Donation Amount<span>*</span></label>
                    <input id="amount" type="number"   name="amount" />
                </div>
                <div class="item">
                    <label for="donation">Donation Amount</label>
                    <textarea id="donation" rows="3" name="commnent"></textarea>
                </div>
            </fieldset>
            <div class="btn-block">
                <button>Lanjut</button>
            </div>
        </form>
    </div> -->
    <div class="row">
        <div class="col-75">
            <div class="container">
            <form action="payment" method="GET">
                <div class="row">
                    <div class="col-50">
                        <h3>Payment</h3>
                        <div class="row">
                            <div class="col-50">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="fname" placeholder="" required>
                            </div>
                            <div class="col-50">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lname" placeholder="" required>
                            </div>
                        </div>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="" required>
                        <label for="phone">Phone Number</label>
                        <input type="number" id="phone" name="phone" placeholder="08xx-xxxx-xxxx" required>
                        <label for="amount">Donation Amount</label>
                        <input type="number" id="amount" name="amount" placeholder="" required>
                        <label for="ccnum">Donation Comment</label>
                        <input type="text" id="donation" name="commnent" placeholder="" required>
                    </div>
                </div>
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
            </div>
        </div>
    </div>
  </body>
</html>