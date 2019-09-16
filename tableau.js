//ajax de suppression
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
                        alert('erreur');
                }
        });
        
}


//ajax d'ajout des médicaments
function ajoumed(){
        var idv = document.getElementById('refer')
        var anv = document.getElementById('anar')
        var isv = document.getElementById('isani')
        var viv = document.getElementById('vidini')

        var idf = idv.value
        var ana = anv.value 
        var isa = isv.value 
        var vidin = viv.value
        
        $.ajax({
                type: 'POST',
                url : 'server.php',
                data : {ampidiro:  1, ref : idf , anarana : ana, isa_amp : isa , vidin_irai : vidin},
                success: function(msg){
                        if (msg == true){
                                $('#addEmployeeModal').modal('hide');
                                $('#myModalt').modal('show');
                        }
                        else{
                                $('#notis').html(msg);
                        }
                },
                error:function(){
                        $('#notis').html("Nisy olana");
                        
                }

        });
}


////Reload de page en cliquant sur le okay
function vita(){
        window.location.reload()
}

//Reload de page en cliquant sur le body
function pageb(){
        var mod = document.getElementById('myModal')
        if (mod.style.display == 'block'){
                window.location.reload()
        }
        
}