const { createApp } = Vue;

createApp({
    data() {
        return {
            discsList: [],
        }
    },

    mounted() {
        axios.get('./server.php').then(res => {
            this.discsList = res.data;
        });
    },
    
}).mount('#app');