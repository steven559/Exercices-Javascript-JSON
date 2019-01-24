var objet;

function ajaxRequest(ville)
{


    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

          document.getElementById('actionUpdate').innerHTML = this.responseText;
          objet = JSON.parse(this.responseText);
           document.getElementById('test').innerHTML='ville :'+objet.name;





        }
        console.log(this.responseText);




    };

    var ville = document.getElementById('ville').value;

    xhttp.open("GET", "script.php?ville="+ville, true);


    xhttp.send();
}

document.getElementById('actionUpdate').addEventListener('click', ajaxRequest);