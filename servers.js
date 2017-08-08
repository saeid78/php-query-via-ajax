
$(document).ready(function () {
    //console.log("oui");

    document.getElementById("bouton").addEventListener("click", function () {
        var formulaire = document.getElementById("myForm");
        var country = $('#country')[0].value,
            city = $('#city')[0].value,
            manufacturer = $('#manufacturer')[0].value,
            cpu = $('#cpu')[0].value,
            ram = $('#ram')[0].value,
            hdd_capacity = $('#hdd_capacity')[0].value,
            storage_type = $('#storage_type')[0].value,
            raid = $('#raid')[0].value,
            bandwidth = $('#bandwidth')[0].value,
            network_speed = $('#network_speed')[0].value;

        // var donnees = formulaire.serialize(); // On créer une variable content le formulaire sérialisé
       // console.log(city);
        var action = "click";
        $.ajax({
            type: 'GET', // envoi des données en GET ou POST
            url: 'servers.php', // url du fichier de traitement
            data: 'country=' + country + '&city=' + city + '&manufacturer=' + manufacturer + '&cpu=' + cpu + '&ram=' + ram + '&hdd_capacity=' + hdd_capacity + '&storage_type=' + storage_type + '&raid=' + raid + '&bandwidth=' + bandwidth + '&network_speed=' + network_speed + '&action=' + action, // données à envoyer en  GET ou POST
            beforeSend: function () { // traitements JS à faire AVANT l'envoi
                $('#results').after('<img src="reload.gif" alt="loader" id="ajax-loader" />'); // ajout d'un loader pour signifier l'action
            },
            success: function (data) { // traitements JS à faire APRES le retour d'ajax-search.php
                console.log("oui5");
                $('#ajax-loader').remove(); // on enleve le loader

                $('#result')[0].innerHTML = (data); // affichage des résultats dans le bloc
                console.log(data);
                console.log($('#result'));
            }
        });


    });
    
    // Ajouter serveurs a la BD
    
    $('#modal_button').click(function () {
        console.log("click!");
        $('#customerModal').modal('show');
        $('#cpu').val('');
        $('#ram').val('');
        $('#hdd_capacity').val('');
        $('#bandwidth').val('');
        $('.modal-title').text("Ajouter un nouveau Serveur");
        $('#action').val('Ajouter');
    });


    $('#action').click(function () {
        var country = document.getElementById('country').value;
        var city = document.getElementById('city').value;
        var manufacturer = document.getElementById('manufacturer').value;
        var cpu = document.getElementById('cpu').value;
        var ram = document.getElementById('ram').value;
        var hdd_capacity = document.getElementById('hdd_capacity').value;
        var storage_type = document.getElementById('storage_type').value;
        var raid = document.getElementById('raid').value;
        var bandwidth = document.getElementById('bandwidth').value;
        var network_speed = document.getElementById('network_speed').value;



        //verifier si les champs sont remplis
        if (cpu != '' && ram != '' && hdd_capacity != '' && bandwidth != '') {
            var action = "Create";
            $.ajax({
                url: "servers.php",
                method: "GET",
                data: {
                    country: country,
                    city: city,
                    manufacturer: manufacturer,
                    cpu: cpu,
                    ram: ram,
                    hdd_capacity: hdd_capacity,
                    storage_type: storage_type,
                    raid: raid,
                    id: id,
                    bandwidth: bandwidth,
                    network_speed: network_speed,
                    action:action
                }, //envoyer les donnees a serveur
                success: function (data) {
                    alert(data);
                    $('#customerModal').modal('hide');

                }
            });
        } else {
            alert("tous les champs sont obligatoires ");
        }
    });

});
