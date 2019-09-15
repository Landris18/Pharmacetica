function cacherform(id_am){
        $.ajax({
                type: 'GET',
                url : 'server.php',
                data: {id: id_am},
                success: function(msg){
                        if (msg  == 1){
                        $('#deleteEmployeeModal' +   id_am ).modal('hide');
                        $('#myModal').modal('show');
                       
                        }
                        else
                        {
                                alert(msg);
                        }
                },
                error: function(){
                        aler('erreur');
                }
        });
        
}

function vita(){
        window.location.reload()
}

function pageb(){
        var mod = document.getElementById('myModal')
        if (mod.style.display == 'block'){
                window.location.reload()
        }
        
}