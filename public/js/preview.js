(function() {
    var inpElem = document.getElementById('exampleInputFile'),
    divElem = document.getElementById('preview');

    inpElem.addEventListener("change", function(e) {
        preview(this.files[0]);
    });

    function preview(file) {

            var reader = new FileReader(), img;

            reader.addEventListener("load", function(event) {
                img = document.createElement('img');
                img.src = event.target.result;
                divElem.appendChild(img);
            });

            reader.readAsDataURL(file);

    }
})();
