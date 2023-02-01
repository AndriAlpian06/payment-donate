
<html>
  <head>
    <title>PEREMPUAN AMAN | PAYMENT</title>
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-9g198xiJk84Fzxjn"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    <style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
  </head>
  <body>
    <div>
      <section class="mb-0">
          <div class="px-6 py-2 md:px-4 bg-gray-50 text-gray-800 min-h-screen text-center lg:text-left">
              <div class="container mx-auto xl:px-32">                  
                  <div class="grid lg:grid-cols-2 gap-4 items-center">
                      <div class="lg:mb-0">
                          <img
                          src="https://perempuanaman.or.id/bacend/wp-content/uploads/elementor/thumbs/PAMAN_DSD_5D4_200825_RUL_0041-scaled-q1fswpn45ks3w02h43nb0rkq6wmwmdwwf6pvgqm1rk.jpg"
                          class="w-full rounded-lg shadow-lg"
                          alt=""
                          />
                      </div>
                      <div class="lg:mt-0">
                          <div class="min-w-screen min-h-screen bg-gray-50 flex items-center justify-center px-2">
                              <div class="w-full mx-auto rounded-lg bg-white shadow-lg p-5 text-gray-700" style="max-width: 600px">
                                  <div class="mb-2">
                                      <h1 class="text-center font-bold text-xl uppercase">Jumlah Donasi</h1>
                                  </div>
                                    <div class="mb-2">
                                        <div>
                                            <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" type="text" name="comment" readonly value={{ $amount }} />
                                        </div>
                                    </div>
                                    <div>
                                        <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold" id="pay-button"><i class="mdi mdi-lock-outline mr-1"></i> PAY NOW</button>
                                    </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
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