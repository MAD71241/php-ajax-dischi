const app = new Vue ({

    el: "#app",

    data: {
        disks: []
    }
    ,
    methods: {

    }
    ,
    mounted() {
        axios.get("./api/disks.php")
        .then(response => {
            this.disks = response.data
            console.log(this.disks);
        })
        .catch(error => {
            console.log(error);
        })
    }
})