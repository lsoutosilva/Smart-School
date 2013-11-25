
//Acordion and Sliding menu
head.js("/assets/admin/js/skin-select/skin-select.js", "/assets/admin/js/custom/scriptbreaker-multiple-accordion-1.js", "/assets/admin/js/custom/accordion.js", "/assets/admin/js/bootstrap.js");

//Date Picker on Right Side of Breadchrum
head.js("/assets/admin/js/datepicker/moment.js", "/assets/admin/js/datepicker/daterangepicker.js", "/assets/admin/js/datepicker/datepicker-coustom.js");
 

//SEARCH MENU
head.js("/assets/admin/js/search/jquery.quicksearch.js", function() {
 
      	$('input#id_search').quicksearch('#menu-showhide li');
 
});
//-------------------------------------------------------------

//TOOL TIP

head.js("/assets/admin/js/tip/jquery.tooltipster.js", function() {
 
       	$('.tooltip-tip-x').tooltipster({
                position: 'right'

            });
       
        $('.tooltip-tip').tooltipster({
                position: 'right',
                animation: 'slide',
                theme: '.tooltipster-shadow',
                onlyOne: true

            });
         $('.tooltip-tip2').tooltipster({
                position: 'right',
                animation: 'slide',
                theme: '.tooltipster-white',
                onlyOne: true

            });
        $('.tooltip-top').tooltipster({
            position: 'top'
         });
        $('.tooltip-right').tooltipster({
            position: 'right'
         });
        $('.tooltip-left').tooltipster({
            position: 'left'
         });
        $('.tooltip-bottom').tooltipster({
            position: 'bottom'
         });
        //For icon tooltip
         $('.entypo-tooltip > ul > li').tooltipster({
                position: 'right',
                animation: 'grow',
                delay:1,
                offsetX:'-60px',
                theme: '.tooltipster-shadow',
                onlyOne: true

            });
         
 
});
//------------------------------------------------------------- 

//NICE SCROLL
head.js("/assets/admin/js/nano/jquery.nanoscroller.js", function() {
 
       	$(".nano").nanoScroller({
                //stop: true 
                scroll: 'top',
                scrollTop: 0,
                sliderMinHeight: 40,
                preventPageScrolling: true
                //alwaysVisible: false

            });
 
});
//------------------------------------------------------------- 

//JQUERY UI

head.js("http://code.jquery.com/ui/1.10.3/jquery-ui.js", function() {
 
       	 $(".grid").sortable({
                tolerance: 'pointer'
            });
 
});
//------------------------------------------------------------- 