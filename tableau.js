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


//ajax modification des médicaments
function modimed(val){
        
        idv_v = $('#eModal' +val + ' #refer_v').val()
        anv_v = $('#eModal' +val + ' #anar_v').val();
        isv_v = $('#eModal' +val + ' #isani_v').val();
        viv_v = $('#eModal' +val + ' #vidin_v').val();

        
        $.ajax({
                type: 'POST',
                url : 'server.php',
                data : {manova:  1, ref_v : idv_v , anarana_v : anv_v, isa_amp_v : isv_v , vidin_irai_v : viv_v},
                success: function(msg){
                        if (msg == true){
                                $('#eModal' + val ).modal('hide');
                                $('#myModalh').modal('show');
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
        var modt = document.getElementById('myModalt')
        var modh = document.getElementById('myModalh')
        var modr = document.getElementById('modalvaliny')
        if (mod.style.display == 'block')  {
                window.location.reload()
        }
        if (modt.style.display == 'block')  {
                window.location.reload()
        }
        if (modh.style.display == 'block')  {
                window.location.reload()
        }
        if (modr.style.display == 'block') {
                window.location.reload()
        }
        
}


function rechercheo(val){

        $.ajax({
                type: 'POST',
                url : 'server.php',
                data : {btnmitad:  1, fanaf_recherche: val},
                success: function(rep){
                                ans = new Array(JSON.parse(rep));
                                $('#vokany').append('<br>');
                                for (i=0; i<ans[0].length ;i++){
                                result = '<hr><p style="color:#fff !important; font-family: Poppins !important; font-size:15px; font-weight:600; padding-left:3% !important;">' + ans[0][i]['nom'] + ' : ' +  ans[0][i]['prix_unit']  + ' Ar' + '</p></hr>';
                                
                                $('#vokany').append(result);

                                $('#modalvaliny').modal('show');
                                }

                },
                error:function(){
                        $('#notis').html("Nisy olana");
                        
                }

        });

}