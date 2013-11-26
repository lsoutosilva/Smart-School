$('.textarea').wysihtml5();

 var g1, g2, g3;

    window.onload = function() {
        var g1 = new JustGage({
            id: "g1",
            value: getRandomInt(0, 1000),
            min: 0,
            max: 1000,
            relativeGaugeSize: true,
            gaugeColor: "#D1D6DF",
            levelColors: "#FF0064",
            title: "perDAY",
            gaugeWidthScale: 0.2,
            donut: true
        });

        var g2 = new JustGage({
            id: "g2",
            value: getRandomInt(0, 100),
            min: 0,
            max: 100,
            title: "THIS HOUR",
            relativeGaugeSize: true,
            showInnerShadow: false,
            gaugeColor: "#595F69",
            valueFontColor: "#595F69",
            levelColors: "#6ADAE4",
            label: "visitors",
            gaugeWidthScale: 0.5,
            donut: false
        });

        var g3 = new JustGage({
            id: "g3",
            value: 545,
            min: 0,
            max: 1000,
            relativeGaugeSize: true,
            gaugeColor: "#FFFFFF",
            levelColors: "#F89406",
            title: "perHOUR",
            gaugeWidthScale: 0.2,
            label: "visitors",
            donut: true
        });


    };
    
     $(window).on('load', function() {
        $(".tooltip-tip2, .tooltip-tip").on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();
            location.href = $(this).attr('href');
        });
    });

