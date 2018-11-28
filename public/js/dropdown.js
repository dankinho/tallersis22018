$("#item").change(event => {
    $.get(`items/${event.target.value}`, function(res, sta){
        $("#item").empty();
        res.forEach(element => {
            $("#item").append(`<option value=${element.id}> ${element.nombre} </option>`);
        });
    });
});
