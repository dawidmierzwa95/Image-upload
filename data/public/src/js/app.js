new Vue({
    el: '#app',
    data() {
      return {
          file: ''
      }
    },
    methods: {
        uploadToServer: function(e) {
            e.preventDefault();

            let formData = new FormData();
            const files = this.$refs.file.files;

            formData.append("img", files[0]);

            axios.post('/point/uploadImage', formData, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(function (response) {
                // handle success
                console.log(response);
            });
        }
    },
    mounted() {

    },
});
