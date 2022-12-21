//Thread Poll func.
    var poll_option_count = 1;
    function addOption() {
        if (poll_option_count <= 10) {
            poll_option_count++;
            document.getElementById('option'+poll_option_count).className = "form-control mt-1";
        } else {
            alert("You can only add 10 options to this poll.");
        }
    }

