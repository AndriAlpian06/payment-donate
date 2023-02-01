<!DOCTYPE html>
<html>
  <head>
    <title>PEREMPUAN AMAN | DONASI</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
                    <div class="mt-4">
                        <p class="text-3xl font-bold">A donation from you today could help climate leaders like Rowena fight climate change in their communities.</p>
                    </div>                   
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
                                    <div class="w-full pt-1 pb-3">
                                        <div class="bg-indigo-500 text-white overflow-hidden rounded-full w-12 h-12 -mt-16 mx-auto shadow-lg flex justify-center items-center">
                                            <i class="mdi mdi-credit-card-outline text-3xl"></i>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <h1 class="text-center font-bold text-xl uppercase">donate payment info</h1>
                                    </div>
                                    <form action="payment">
                                        <div class="mb-2">
                                            <label class="font-bold text-sm mb-2 ml-1">Fisrt Name</label>
                                            <div>
                                                <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" type="text" name="fname" required/>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label class="font-bold text-sm mb-2 ml-1">Last Name</label>
                                            <div>
                                                <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" type="text" name="lname" required/>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label class="font-bold text-sm mb-2 ml-1">Email</label>
                                            <div>
                                                <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" type="text" name="email" required/>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label class="font-bold text-sm mb-2 ml-1">Phone</label>
                                            <div>
                                                <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" placeholder="xxxx xxxx xxxx xxxx" type="number" name="phone"/>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label class="font-bold text-sm mb-2 ml-1">Amount</label>
                                            <div>
                                                <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" type="number" name="amount"/>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label class="font-bold text-sm mb-2 ml-1">Comment Donation</label>
                                            <div>
                                                <input class="w-full px-3 py-2 mb-1 border-2 border-gray-200 rounded-md focus:outline-none focus:border-indigo-500 transition-colors" type="text" name="comment" required/>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"><i class="mdi mdi-lock-outline mr-1"></i>Lanjut</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  </body>
</html>