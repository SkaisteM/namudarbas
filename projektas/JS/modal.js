var buttons = document.getElementsByClassName("click");
var buttonsCount = buttons.length;
for (var i = 0; i <= buttonsCount; i += 1) {
    buttons[i].onclick = function(e) {
        //alert((this.id).slice(-1));
        var kodas=(this.id).slice(-1);

        var modal = document.getElementsByClassName('mForma')[kodas];
        modal.style.display = "block";

        var span = document.getElementsByClassName("close")[kodas];


        span.onclick = function() {
          modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
            };

    };
}
