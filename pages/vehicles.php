<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>INDUCAP | Cotxes clàssics a preus d'escàndol</title>
</head>
<body>

    <div class="bg-white">
      
    <?php include "../PHP/header.php"; ?>

        <div class="relative isolate px-6 pt-14 lg:px-8">


          <div class="grid grid-cols-3 gap-5 absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>

          <div class="grid grid-cols-4 gap-20 my-10">

          <?php 
              include '../PHP/loadAllVehicles.php'; 

              foreach ($vehicles as $vehicle){

                $link = "window.location.href='./vehicle.php?id=". $vehicle["id"] . "'";

                echo '
                      <div class="max-w-sm rounded overflow-hidden shadow-lg cursor-pointer" onclick="' . $link . '">
                        <img class="w-full" src="' . $vehicle["pics"] . '" alt="'. $vehicle["make"] . ' ' . $vehicle["model"] .'">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">' . $vehicle["make"] . ' ' . $vehicle["model"] . ' ' . $vehicle["year"] .'</div>
                          <p class="text-gray-700 text-base">' .
                            $vehicle["description"]
                          .'</p>
                          <div class="font-bold text-xl mb-2 my-2">' . $vehicle["price"] . '€' .'</div>
                        </div>
                        <!-- <div class="px-6 pt-4 pb-2">
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div> -->
                      </div>';

              }

            ?>
          </div>
          
          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
        </div>
      </div>
</body>
</html>