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
            
    <?php 
     
    (isset($_GET["id"])) && $vanId = $_GET["id"];

    include '../PHP/loadSingleVan.php';

    ?>

    <div class="flex flex-col">

        <div class="flex flex-row my-15">
            <div class="basis-1/3 mx-10">
                <img src="<?= $furgoneta['fotos']?>" alt="">
            </div>
            <div class="basis-2/3">
                <h3 class="mb-2 mt-0 text-3xl font-medium leading-tight text-primary"><?=$furgoneta["fabricant"] .' '. $furgoneta['model']?></h3>
                <h5 class="mb-2 mt-0 text-xl font-medium leading-tight text-primary">Any: <?=$furgoneta["any"]?></h5>
                <h5 class="mb-2 mt-0 text-xl font-medium leading-tight text-primary">Color: <?=$furgoneta["color"]?></h5>
                <h5 class="mb-2 mt-0 text-xl font-medium leading-tight text-primary">Kilòmetres: <?=$furgoneta["kms"] . 'km'?></h5>
            </div>

        </div>

        <div class="mx-10">
            <p><?=$furgoneta["descripcio"]?></p>
        </div>

    </div>
    
          
          <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
          </div>
        </div>
      </div>
</body>
</html>