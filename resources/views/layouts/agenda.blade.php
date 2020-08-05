 <!-- Agenda -->
 <div id="infoagenda" class="infoagenda">
     <div class="calendar-image">
         <a href="javascript:;" class="infoagenda-close toggle-calendar"><i class="icon-x"></i></a>
         <img src="{{ url('assets/assets/img/landscape.jpg') }}" class="img-fluid" />
         <div class="date-info d-flex">
             <div class="date-value">

             </div>
             <div>
                 <div class="date-month"></div>
                 <div class="date-day"></div>
             </div>
         </div>
     </div>
     <div class="calendar-wrapper">
         <div id="eventCalendar" class="vanilla-calendar"></div>
     </div>
     <div class="calendar-agenda-wrapper">
         <div class="calendar-agenda-header d-flex justify-content-between">
             <div><strong>Your Agenda</strong></div>
             <div><a href="#" class="btn-addagenda" data-toggle="modal" data-target="#addagendamodal"><i
                         class="icon-plus"></i></a></div>
         </div>
         <div class="calendar-agenda-list mt-4">
             <div><small><strong>Today</strong>, 20 April 2020</small></div>

             <div class="card mt-2 bg-primary text-white">
                 <div class="card-body fs-md has-close-link">
                     <a href="#" class="close-link text-white"><i class="icon-x"></i></a>
                     <div class="agenda-time text-white">13.00 - 14.00</div>
                     <div>Marketing Project</div>
                 </div>
             </div>
             <div class="card mt-2">
                 <div class="card-body fs-md has-close-link">
                     <a href="#" class="close-link text-dark"><i class="icon-x"></i></a>
                     <div class="agenda-time">13.00 - 14.00</div>
                     <div>Marketing Project</div>
                 </div>
             </div>
             <div class="card mt-2">
                 <div class="card-body fs-md has-close-link">
                     <a href="#" class="close-link text-dark"><i class="icon-x"></i></a>
                     <div class="agenda-time">13.00 - 14.00</div>
                     <div>Marketing Project</div>
                 </div>
             </div>
             <div class="card mt-2">
                 <div class="card-body fs-md has-close-link">
                     <a href="#" class="close-link text-dark"><i class="icon-x"></i></a>
                     <div class="agenda-time">13.00 - 14.00</div>
                     <div>Marketing Project</div>
                 </div>
             </div>

             <div class="mt-3"><small><strong>Sunday</strong>, 18 April 2020</small></div>
             <div class="card mt-2">
                 <div class="card-body fs-md has-close-link">
                     <a href="#" class="close-link text-dark"><i class="icon-x"></i></a>
                     <div class="agenda-time">13.00 - 14.00</div>
                     <div>Marketing Project</div>
                 </div>
             </div>
             <div class="card mt-2">
                 <div class="card-body fs-md has-close-link">
                     <a href="#" class="close-link text-dark"><i class="icon-x"></i></a>
                     <div class="agenda-time">13.00 - 14.00</div>
                     <div>Marketing Project</div>
                 </div>
             </div>
             <div class="card mt-2">
                 <div class="card-body fs-md has-close-link">
                     <a href="#" class="close-link text-dark"><i class="icon-x"></i></a>
                     <div class="agenda-time">13.00 - 14.00</div>
                     <div>Marketing Project</div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Modal -->
 <div class="modal fade" id="addagendamodal" tabindex="-1" role="dialog" aria-labelledby="addagendamodalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-body">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <i class="icon-x"></i>
                 </button>
                 <form name="addagenda" action="" method="post">
                     <div class="form-group">
                         <span class="mr-2"><i class="icon-clock"></i></span> <span class="mr-2">20 April
                             2020</span>
                         <span>12.00 - 14.00</span>
                     </div>

                     <div class="form-group">
                         <textarea class="form-control" name="date" placeholder="Your Agenda"></textarea>
                     </div>
                     <div class="text-right">
                         <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                         <button type="button" class="btn btn-main pl-4 pr-4">Save</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
