
$(document).ready(function(){
        $('#reservationForm').submit(function(e){
            $.ajax({
                type:"POST",
                url:"ajax-form.php",
                data:$("#reservationForm").serialize(),
                async:true,
                success:function(data){
                    console.log(data);
                    alert("Records insert successful");
                },
                error:function(xhr){
                    alert("Failed");
                }
            });
            e.preventDefault();
        })
})
