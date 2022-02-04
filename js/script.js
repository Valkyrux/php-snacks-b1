const app = new Vue({
    el: "#app",
    data: {
        cars: [],
        showCars: [],
        inputText: ""
    },
    methods: {
        filterForBrand() {
            this.showCars = this.cars.filter((element) => element.brand.toLowerCase().includes(this.inputText.toLowerCase()) || element.model.toLowerCase().includes(this.inputText.toLowerCase()));
        }
    },
    created() {
        axios.get('../server/controller-api.php')
            .then((response) => {
                this.cars = response.data;
                this.showCars = this.cars.map((element) => element);
    })
            .catch((error) => {
                console.log(error);
    })
    }
});