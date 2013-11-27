<?= $base ?>

<!--  CONTENT -->

<div class="wrap-fluid">
    <div class="container-fluid">
        <!-- TITLE -->
        <div class="row-fluid">

            <div class="span8">
                <h2 class="tittle-content-header">Dashboard</h2>
            </div>

            <div class="span4">
                <form method="get" action="/search" id="search">
                    <input name="q" type="text" size="40" placeholder="Search..." />
                </form>
            </div>
            <div class="tittle-content"></div>
        </div>
        <!--/ TITLE -->


        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <span class="entypo-cancel-squared"></span>
            </button>
            <span style="font-size:20px;" class="fontelico-emo-beer"></span>
            <strong>&#160;Hello there.....!</strong>&#160;wellcome to School Connected, please enjoy &#160;
            <span class="fontelico-emo-happy"></span>
        </div>



        <!-- <div class="row-fluid grid">
 
             <div class="span4">
                 <div class="nest">
                     <div class="body-nest ">
                         <h5>Visits</h5>
                         <div id="g1" class="gauge"></div>                         
                         <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh .</p>
 
                     </div>
                 </div>
             </div>
 
             <div class="span4">
 
                 <div class="nest">
                     <div class="body-nest">
                         <h5>Last Visit</h5>
                         <div id="g2" class="gauge"></div>
                         <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh .</p>
 
                     </div>
                 </div>
             </div>
 
             <div class="span4">
 
                 <div class="nest">
                     <div class="body-nest">
                         <h5>Realtime</h5>
                         <div id="g3" class="gauge"></div>
                         <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh .</p>
 
                     </div>
                 </div>
             </div>
 
         </div> -->

        <div class="row-fluid">

            <!--  <div class="span8">
            <!-- LABEL 
            <div class="nest">
                <div class="title">
                    <span class="titleIcon entypo-calendar"></span>
                    <h6>Calendar</h6>
                </div>

                <div class="body-nest">

            <!-- CALENDAR 
            <div class="container-fluid">

                <div class="page-header">

                    <div class="pull-right form-inline">
                        <div class="btn-group">
                            <button class="btn btn-primary" data-calendar-nav="prev">
                                <span class="entypo-left-circled"></span>Prev</button>
                            <button class="btn" data-calendar-nav="today">Today</button>
                            <button class="btn btn-primary" data-calendar-nav="next">Next
                                <span class="entypo-right-circled"></span>
                            </button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-warning" data-calendar-view="year">Year</button>
                            <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                            <button class="btn btn-warning" data-calendar-view="week">Week</button>
                            <button class="btn btn-warning" data-calendar-view="day">Day</button>
                        </div>
                    </div>


                    <h3></h3>
                    <p>To see example with events navigate to march 2013</p>
                </div>
                <div class="row-fluid">
                    <select id="first_day" class="span12">
                        <option value="" selected="selected">First day of week language-dependant</option>
                        <option value="2">First day of week is Sunday</option>
                        <option value="1">First day of week is Monday</option>
                    </select>
                    <select id="language" class="span12">
                        <option value="">Select Language (default: en-US)</option>
                        <option value="fr-FR">French</option>
                        <option value="de-DE">German</option>
                        <option value="el-GR">Greek</option>
                        <option value="it-IT">Italian</option>
                        <option value="pl-PL">Polish</option>
                        <option value="pt-BR">Portuguese (Brazil)</option>
                        <option value="es-MX">Spanish (Mexico)</option>
                        <option value="es-ES">Spanish (Spain)</option>
                        <option value="ru-RU">Russian</option>
                        <option value="sv-SE">Swedish</option>
                    </select>
                    <label class="checkbox">
                        <input type="checkbox" value="#events-modal" id="events-in-modal">Open events in modal window
                    </label>
                </div>
                <div class="row-fluid">
                    <div class="span12">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
            <!-- /CALENDAR
        </div> 
    </div> 

</div>-->
            <div class="span8">
                <!-- LABEL -->
                <div class="nest">
                    <div class="title">
                        <span class="titleIcon entypo-chat"></span>
                        <h6>Quadro de avisos</h6>
                    </div>

                    <div class="body-nest">
                        <?php foreach ($posts as $post): ?>

                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABi0lEQVR4nO2VrZLCMBRGef9HuSImoiIC05maiogaRERMJa9wVyXD37K7FDjD7CfOTIH0zuEk0N3xePT/zI4WoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkcIOfsMUY3M48xeq31ak0Iwc0MnfmSAIfDwc3Mc85ea3Uz8/1+f7Zmnmc3s1/LvmLmywKklO5KrOvad7Kta19qGIa+bhgGNzOvtT40EwvQjmiTTimdfT6Ooy/LciXbdjDn3K/ned40EwtgZl5K6Ue3Hddaa9/lW7IxRg8heAjBY4xPmYkFuPU6peSllG9lc879/WmanjLz7QEu/4lPpdr1Jaf3np6CdV03z3x7gGma+m+5lOJm5uM4/nhS2n3LsvST0O57dCYSoAm3Xbsleil77ynQjvdfZ6IBPh0FoAVoFIAWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoPkClAggzoBQdWcAAAAASUVORK5CYII=">
                                </a>

                                <div class="media-body ">
                                    <div class="chat-left">
                                        <h4 class="media-heading"><?=$post->login?> no dia <?=date("d-m-Y", strtotime($post->data_post));?> ás <?=date("h:i:s", strtotime($post->data_post));?> </h4>
                                        <?= $post->post ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="message-form">
                            <div class="row-fluid">
                                
                                <div class="span10">
                                    <input type="text" placeholder="Type a message..." class="span12">
                                </div>
                                <div class="span2">
                                    <button class="btn btn-block btn-danger" type="button">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /LABEL -->

                <!-- LABEL -->
                <!--  <div class="nest">
                      <div class="title">
                          <span class="titleIcon entypo-tag"></span>
                          <h6>SEND ME</h6>
                      </div>
  
                      <div class="body-nest">
  
                          <textarea class="textarea" placeholder="Enter text ..." style="width: 98%; height: 200px"></textarea>
  
                      </div>
                  </div>
                <!-- /LABEL -->
            </div>
        </div>


        <div class="row-fluid">

            <div class="span6">
                <!-- LABEL -->
                <div class="nest">
                    <div class="body-nest">
                        <h6>
                            <span class="entypo-chart-area"></span>&#160;Live stat</h6>


                        <div id="placeholder" style="width:100%;height:200px;"></div>

                        <div style="margin:20px 0 0 25px" class="input-prepend input-append">
                            <span class="add-on entypo-back-in-time"></span>
                            <input class="span2" id="updateInterval" type="text">
                            <span class="add-on">milliseconds</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="span6">

                <div class="nest">
                    <div class="body-nest">
                        <h6>
                            <span class="entypo-chart-bar"></span>&#160;Site Visits</h6>


                        <div id="placeholder2" style="width:100%;height:200px;"></div>
                        <!--   <p>You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
                        -->

                        <div class="graphControls">
                            <input type="button" class="btn" value="Bars">
                            <input type="button" class="btn" value="Lines">
                            <input type="button" class="btn" value="Lines with steps">
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- Container -->
</div>
<!-- wrap-fluid -->
<!--  CONTENT -->


<!-- MAIN EFFECT -->
<?=
$footer?>