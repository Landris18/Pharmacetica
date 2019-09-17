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
<<<<<<< HEAD

=======
        if (modr.style.display == 'block') {
                window.location.reload()
        }
        
>>>>>>> aba3daecd01ee6281cbe1dcf7e1ab3c6bea30085
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
<<<<<<< HEAD
                                result = '<div class="form-control"> <label>' + ans[0][i]['nom'] + ' : ' +  ans[0][i]['prix_unit']  + ' Ar' + '</label></div>';

=======
                                result = '<hr><p style="color:#fff !important; font-family: Poppins !important; font-size:15px; font-weight:600; padding-left:3% !important;">' + ans[0][i]['nom'] + ' : ' +  ans[0][i]['prix_unit']  + ' Ar' + '</p></hr>';
                                
>>>>>>> aba3daecd01ee6281cbe1dcf7e1ab3c6bea30085
                                $('#vokany').append(result);

                                $('#modalvaliny').modal('show');
                                }

                },
                error:function(){
                        $('#notis').html("Nisy olana");

                }

        });

    }


function commander(){
  $.ajax({
          type: 'POST',
          url : 'server.php',
          data : {fandrika:  1, an_mp:$('#an_mp').val() ,fan_mp: $('#fan_mp').val(), kara_mp: $('#kara_mp').val(), adr_mp: $('#adr_mp').val(), find_mp: $('#find_mp').val(), an_fn: $('#an_fn option:selected').val(), isa_fn: $('#isa_fn').val()},
          success: function(rep){

            if (rep == 'http://127.0.0.1/Pharma/pic.png'){
                  html = "<p style='color:#f05f40;' > Opérations reussi  </p>";
                  $('#an_mp').val('');
                  $('#fan_mp').val('');
                  $('#kara_mp').val('');
                  $('#adr_mp').val('');
                  $('#find_mp').val('');
                  $('#isa_fn').val('');
                  btn = "<input type='button' style='color:#640f91;' onclick=redirect('" + rep + "') value='Telecharger le QRCode de commande' />";
                  $('#btnfarany').after(btn);
                  $('#btnfarany').after(html);

            }
            else{
              html = "<p style='color:red;' >" + rep + "</p>";
              $('#btnfarany').after(html);
            }
          },
          error:function(){
                  $('#notis').html("Nisy olana");
          }


});
}


function redirect(val){
  window.location = val;
}
