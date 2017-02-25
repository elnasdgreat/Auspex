$(document).ready(function(){

    $('.collapsible').collapsible();

    var countChecked = function() {
        var n = $( "input:checked" ).length;
        $( "#count" ).text( n + " selected" );
    };

    countChecked();

    var symptoms = [];

    $( "input[type=checkbox]" ).on( "click", countChecked);

    $( "input[type=checkbox]" ).on( "click", function(e) {

        if ( symptoms.includes($(this).data('symptom')) ) {

            var delItem = symptoms.indexOf($(this).data('symptom'));
            symptoms.splice(delItem, 1);

            if(symptoms.length === 0) { $('#symptoms-container').addClass('hide'); }

        } else {
            $('#symptoms-container').removeClass('hide')
            symptoms.push($(this).data('symptom'));
        };

        // var strSymptoms = symptoms.toString();
        // strSymptoms = strSymptoms.replace(/,/gi, ', ')

        // $('#symptoms').html(strSymptoms);
        //
        $('#symptoms').empty();

        for (var i = 0, len = symptoms.length; i < len; i++) {

            var separate = (i > 0 ? '<span class="red-text text-accent-1"> | </span>' : '');

            $('#symptoms').append(separate + '<a href="' + symptoms[i] + '" class="white-text">' + symptoms[i] + '</a>');
        }




    });


    $("#start-button").on("click", function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();


        if(symptoms.length > 2) {
            $('#msg').toggleClass('hide');
            $('#content').toggleClass('scale-out');
            $('#start-button').toggleClass('scale-out');


            setTimeout(function() {
                $('#start-button').toggleClass('hide');
                $('#content').toggleClass('hide');
                $('#spinner').toggleClass('hide');
            }, 300);


            var formData = $('#symptoms-form').serialize();

            $.ajax({
                url: "/app/predict",
                type: "POST",
                data: formData,
                dataType: "json"
            })
            .done(function(responseData) {

                if (responseData !== null) {

                    console.log(responseData);
                    responseDataSize = Object.keys(responseData).length;

                    if( responseDataSize > 0) {
                        for(disease in responseData) {

                            var i = 0;
                            var x = responseData[disease].symptoms.length - 1;
                            var idDisease = disease.replace(/\W+/g, '');
                            var desc = responseData[disease].desc;

                            // console.log(disease);
                            // $('.result-items').append('<div class="symptoms-list white-text"><p>Disease : <a href="' + disease + '" class="disease-name white-text">' + disease + "</a></p><p>Symptoms : </p><div class='symptoms-items'>" );
                            $('.result-items').append('<a href="' + disease + '" class="disease-item collection-item"><p class="disease-name">' + disease + '</p><p>'+ desc +'</p><p>Symptoms : </p><div class="symptoms-items" id="' + idDisease + '">');


                            for(symptom in responseData[disease].symptoms) {

                                var symp = responseData[disease].symptoms[symptom];

                                var separate = (i > 0 ? '<span class="red-text text-accent-1"> | </span>' : '');

                                var closeDiv = (i === x ? '</div></a>' : '');

                                // console.log(responseData[disease].symptoms[symptom]);
                                $('#' + idDisease).append(separate + '<a href="' + symp + '" class="red-text">' + symp + "</a>" + closeDiv);

                                i++;
                            }
                        }
                    } else {
                        $('.result-items').append('<li class="collection-item no-result"><h5>0 possible diseases.</h5></li>');
                    }



                    setTimeout(function() {
                        $('#spinner').toggleClass('hide');
                        $('#results').toggleClass('hide').toggleClass('scale-in');
                        // $('#results').toggleClass('scale-out');
                        // $('#results').addClass('hide scale-in');
                    }, 2300);




                } else {

                    console.log('NOOOOOOOO!!!');

                }


            })
            .fail(function(responseData) {
                console.log('FAIL');
            });



        }
        else {
            $('#msg').text('Please select at least 3-5 symptoms.');
        }


    });

});
