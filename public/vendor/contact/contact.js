
$('#msg-success').hide();

$('#form').submit(function(e){
    e.preventDefault();

    var form = document.getElementById('form');
    let data = new FormData(form);

    const xhr = new XMLHttpRequest();

    xhr.open('POST', 'api/new_contact', true);

    xhr.onreadystatechange = () => {
        if(xhr.readyState == 4) {
            if(xhr.status == 200) {
                $('#msg-success').show();
            }
        }
    }

    xhr.send(data);
});