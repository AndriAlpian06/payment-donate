
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-9g198xiJk84Fzxjn"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <style>

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

      .col-25 {
        padding: 0 16px;
      }

      span.price {
        float: right;
        color: grey;
      }

      .container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
      }

      .button-pay {
        position: absolute;
        top:10%;
        background-color:#8756c2;
        color: #fff;
        border:none; 
        border-radius:10px; 
        padding:15px;
        min-height:30px; 
        min-width: 120px;
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
    <div class="col-25">
      <div class="container">
        <h4>Donasi <span class="price" style="color:black"></h4>
        <hr>
        <p>Total <span class="price" style="color:black"><b>{{ $amount }}</b></span></p>
      </div>
      <button id="pay-button" class="btn">Pay</button>
    </div>
    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snap_token}}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            alert("payment success!"); console.log(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          },
        });
        // customer will be redirected after completing payment pop-up
      });
    </script>
  </body>
</html>