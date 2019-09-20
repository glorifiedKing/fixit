<div id="myModal" class="modal fade" role="dialog">
<div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">
                @yield('title')
            </h4>
        </div>
        
        <div class="modal-body">
         <div class="box">
         	@yield('content')
         </div>
        </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
@yield('js') 
