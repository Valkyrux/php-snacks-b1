<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Cars</title>
</head>

<body>
    <div id="app">
        <div>
            <input type="text" v-model="inputText" @keydown.enter="filterForBrand">
            <div v-for="(car,index) in showCars" :key="index">
                <h1>{{car.brand}} {{car.model}}</h1>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>