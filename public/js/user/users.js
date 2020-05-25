
document.body.onload = () => {
    let deleteModal = document.getElementById("delete-product-modal");
    console.log('test');

    let showFormBtn = document.getElementById("show-new-order-info-form");
    let newOrderForm = document.getElementById("new-order-form");
    newOrderForm.style.display = "none";

    showFormBtn.onclick = () => {
        console.log('Clicked');
        if(newOrderForm.style.display=="none"){
            newOrderForm.style.display="block"; 
        }else{
            newOrderForm.style.display="none";
        }
    }

    $('.deletebtn').on('click', function()  {

        deleteModal.style.display = "block";
        $tr = $(this).closest('tr');
    
        var data = $tr.children("td").map(function() {
            return  $(this).text();
        }).get();
    
        //console.log(data);

        $('#delete_id').val(data[0]);

    });

    $('.closebtn').on('click', function()  {
        deleteModal.style.display = "none";
    });

    
}

