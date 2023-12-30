function replyComment(id) {
    console.log('Function called with id:', id);

    $.ajax({
        url: '/forum/comment/reply/' + id,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
            console.log(data.data)
            document.querySelector('#parent_name').innerText = data.data.description;
            document.querySelector('#parent_id').value = data.data.id;
        },
        error: function(xhr, status, error) {
            console.error('AJAX Request Error:', error);
        }
    });
}


function saveComment(event, isYes) {
    event.preventDefault();
    console.log('here');

    let parent_id, description, token;
    if(isYes === 'yes') {
        parent_id = document.querySelector('#parent_id').value;
        description = document.querySelector('#description').value;
        token = document.querySelector('input[name="_token"]').value;
    }else{
        console.log('kini');

        parent_id = document.querySelector('#parent_id_p').value;
        console.log('p');

        description = document.querySelector('#description_p').value;
        console.log('d');

        token = document.querySelector('#tokens_p').value;
    }
    console.log('sff');


    console.log(description);

    url = `/forum/comment`;

    console.log(token);

        fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept' : 'application/json'
        },
        body: JSON.stringify({
            parent_id: parent_id,
            description: description,
            _token: token
        }),
    })
        .then(response => response.json())
        .then(data => {
            console.log('Response:', data);
            console.log('Status:', data.status);
            if(data.status === 'success'){
                document.getElementById("notification").innerHTML = '<div class="alert alert-important alert-success alert-dismissible" role="alert">'+
                    '<div class="d-flex">'+
                    '<div>' + data.message + ' </div>'+
                    '</div> <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a></div>';
                setTimeout(function(){ window.location.reload(true); }, 2000);
            }else {
                document.getElementById("notification").innerHTML = '<div class="alert alert-important alert-danger alert-dismissible" role="alert">'+
                    '<div class="d-flex">'+
                    '<div>' + data.message +'! </div>'+
                    '</div> <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a></div>';
            }
        })
        .catch(error => console.error('Error:', error));
}
