const { createApp } = Vue;

createApp({
    data() {
        return {
            movies: []
        }
    },
    created() {
        axios.get('server.php')
        .then((response) => {
            this.movies = response.data;
            console.log(response);
        })
    }
}).mount('#app');